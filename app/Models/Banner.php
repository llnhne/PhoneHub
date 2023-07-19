<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Banner extends Base
{
    use HasFactory;
    public $title = 'Quản Lý Banner';
    public $titlecreate = 'Thêm Mới - Banner Marketing';
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
                'name' => 'Tên Banner',
                'type' => 'name_banner',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|max:100'
            ),
            array(
                'field' => 'image',
                'name' => 'Ảnh sản phẩm Banner',
                'type' => 'image',
                'listing' => true,
                'editing' => true,
                'validate' => 'required|mimes:jpeg,png,jpg,gif'
            ),
            array(
                'field' => 'created_at',
                'name' => 'Ngày tạo',
                'type' => 'text',
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'updated_at',
                'name' => 'Ngày cập nhật',
                'type' => 'text',
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'id',
                'name' => 'Chi tiết',
                'type' => 'about',
                'filter' => 'about',
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'id',
                'name' => 'Sửa',
                'type' => 'edit',
                'filter' => 'edit',
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'id',
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
