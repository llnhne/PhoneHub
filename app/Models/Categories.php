<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Categories extends Base
{
    use HasFactory;
    public $title = 'Quản Lý Danh Mục';
    public $titlecreate = 'Thêm Mới - Danh Mục Sản Phẩm';
    public function configs()
    {
        // $defaultListingconfigs = parent::defaultlistingConfigs();
        $listingconfigs = array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
                'filter' => 'equal',
                'sort' => true,
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'name',
                'name' => 'Tên danh mục',
                'type' => 'category_name',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'editing' => true
            ),
            array(
                'field' => 'description',
                'name' => 'Mô tả danh mục',
                'type' => 'ckeditor',
                'listing' => false,
                'editing' => true
            ),
            array(
                'field' => 'created_at',
                'name' => 'Ngày tạo',
                'type' => 'text',
                'sort' => true,
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'updated_at',
                'name' => 'Ngày cập nhật',
                'type' => 'text',
                'sort' => true,
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'name',
                'name' => 'Chi tiết',
                'type' => 'about',
                'filter' => 'about',
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'name',
                'name' => 'Sửa',
                'type' => 'edit',
                'filter' => 'edit',
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'name',
                'name' => 'Xóa',
                'type' => 'delete',
                'filter' => 'delete',
                'listing' => true,
                'editing' => false
            )
        );
        return array_merge($listingconfigs);
    }
}