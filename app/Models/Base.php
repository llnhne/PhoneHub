<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;

class Base extends Model
{
    use HasFactory;

    public function getRecords($conditions, $orderBy)
    {
        $per_page = 5;
        return self::orderBy($orderBy['field'], $orderBy['sort'])->where($conditions)->paginate($per_page)->withQueryString();
    }
    public function getFilter($request, $configs, $modelName)
    {
        $conditions = [];
        if ($request->method() == "POST") {
            // var_dump($request->input('field'));exit;
            foreach ($configs as &$config) {
                if (!empty($config['filter'])) {
                    $value = $request->input($config['field']);
                    switch ($config['filter']) {
                        case "equal":
                            if (!empty($value)) {
                                $conditions[] = [
                                    'field' => $config['field'],
                                    'condition' => '=',
                                    'value' => $value
                                ];
                                $config['filter_value'] = $value;
                            }
                            break;
                        case "like":
                            if (!empty($value)) {
                                $conditions[] = [
                                    'field' => $config['field'],
                                    'condition' => 'like',
                                    'value' => '%' . $value . '%'
                                ];
                                $config['filter_value'] = $value;
                            }
                            break;
                        case "between":
                            if (!empty($value['from'])) {
                                $conditions[] = [
                                    'field' => 'price',
                                    'condition' => '>=',
                                    'value' => $value['from']
                                ];
                                $config['filter_from_value'] = $value['from'];
                            }
                            if (!empty($value['to'])) {
                                $conditions[] = [
                                    'field' => 'price',
                                    'condition' => '<=',
                                    'value' => $value['to']
                                ];
                                $config['filter_to_value'] = $value['to'];
                            }
                            break;
                    }
                }
            }
            Cookie::queue(strtolower($modelName) . '_filter', json_encode($conditions), 24 * 60);
            /*
                  strtolower: chuyển về chữ thường
                  json_encode: chuyển từ mảng về string
                  json_decode: chuyển về mảng
                  cookie: 24 hours
                 */
        } else { /* method: GET */
            $conditions = json_decode(Cookie::get(strtolower($modelName) . '_filter'));
            if (!empty($conditions)) {
                foreach ($conditions as &$condition) {
                    $condition = (array) $condition;
                    foreach ($configs as &$config) {
                        if ($config['field'] == $condition['field']) {
                            switch ($config['filter']) {
                                case "equal":
                                    $config['filter_value'] = $condition['value'];
                                    break;
                                case "like":
                                    $config['filter_value'] = str_replace("%", "", $condition['value']);
                                    break;
                                case "between":
                                    if ($condition['condition'] == ">=") {
                                        $config['filter_from_value'] = str_replace("%", "", $condition['value']);
                                    } else {
                                        $config['filter_to_value'] = str_replace("%", "", $condition['value']);
                                    }
                                    break;
                            }
                        }
                    }
                }
            }
        }
        return array(
            'conditions' => $conditions,
            'configs' => $configs
        );
        // var_dump($conditions);exit;
    }
    // public function defaultlistingConfigs()
    // {
    //     return array(
    //         array(
    //             'field' => 'created_at',
    //             'name' => 'Ngày tạo',
    //             'type' => 'text'
    //         ),
    //         array(
    //             'field' => 'updated_at',
    //             'name' => 'Ngày cập nhật',
    //             'type' => 'text'
    //         )
    //     );
    // }
}
