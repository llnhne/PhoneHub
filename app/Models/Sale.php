<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Sale extends Base
{
    use HasFactory;
    public $title = 'Quản Lý Khuyến Mại';
    public $titlecreate = 'Thêm Mới - Khuyến Mại';
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
                'name' => 'Tên khuyến mãi',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|max:100'
            ),
            array(
                'field' => 'price',
                'name' => 'Giá gốc',
                'type' => 'number',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|min:5|max:12'
            ),
            array(
                'field' => 'price_sales',
                'name' => 'Giá giảm',
                'type' => 'price_sales',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|min:5|max:12'
            ),
            array(
                'field' => 'products_id',
                'name' => 'Mã loại sản phẩm',
                'type' => 'products_id',
                'listing' => false,
                'editing' => true
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
