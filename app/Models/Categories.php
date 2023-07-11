<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Categories extends Base
{
    use HasFactory;
    public $title = 'Quản Lý Danh Mục';
    public function listingConfigs()
    {
        // $defaultListingconfigs = parent::defaultlistingConfigs();
        $listingconfigs = array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
                'filter' => 'equal',
                'sort' => true
            ),
            array(
                'field' => 'name',
                'name' => 'Tên danh mục',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true
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
