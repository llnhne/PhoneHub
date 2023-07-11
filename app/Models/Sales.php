<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Sales extends Base
{
    use HasFactory;
    public $title = 'Quản Lý Khuyến Mại';
    public function listingConfigs()
    {
        // $defaultListingconfigs = parent::defaultlistingConfigs();
        $listingconfigs = array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
                'sort' => true
            ),
            array(
                'field' => 'name',
                'name' => 'Tên khuyến mãi',
                'type' => 'text',
                'sort' => true
            ),
            array(
                'field' => 'price',
                'name' => 'Giá sản phẩm',
                'type' => 'number',
                'sort' => true
            ),
            array(
                'field' => 'image',
                'name' => 'Ảnh sản phẩm',
                'type' => 'image'
            ),
            array(
                'field' => 'created_at',
                'name' => 'Ngày tạo',
                'type' => 'text',
                'sort' => true
            ),
            array(
                'field' => 'updated_at',
                'name' => 'Ngày cập nhật',
                'type' => 'text',
                'sort' => true
            ),
            array(
                'field' => 'name',
                'name' => 'Chi tiết',
                'type' => 'about',
                'filter' => 'about'
            ),
            array(
                'field' => 'name',
                'name' => 'Sửa',
                'type' => 'edit',
                'filter' => 'edit'
            ),
            array(
                'field' => 'name',
                'name' => 'Xóa',
                'type' => 'delete',
                'filter' => 'delete'
            )
        );
        return array_merge($listingconfigs);
    }
}
