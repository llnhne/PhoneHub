<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Base
{
    use HasFactory;
    use SoftDeletes;

    public $title = 'Quản Lý Khuyến Mãi';
    public $titlecreate = 'Thêm Mới - Khuyến Mãi';
    public $titleupdate = 'Cập Nhật - Khuyến Mãi';
    public $titledetail = 'Chi Tiết - Khuyễn Mãi';
    public $titlearchive = 'Đã Xóa Gần Đây - Quản Lý Khuyến Mãi';
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
                'editing' => false,
                'detail' => true,
                'updating' => false,
                'archive' => true
            ),
            array(
                'field' => 'name',
                'name' => 'Tên khuyến mãi',
                'type' => 'name_sale',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|max:100',
                'detail' => true,
                'updating' => true,
                'archive' => true
            ),
            array(
                'field' => 'price',
                'name' => 'Giá gốc',
                'type' => 'number',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|min:5|max:12',
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'price_sales',
                'name' => 'Giá giảm',
                'type' => 'price_sales',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|min:5|max:12',
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'products_id',
                'name' => 'Mã loại sản phẩm',
                'type' => 'products_id',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'created_at',
                'name' => 'Ngày tạo',
                'type' => 'created_at',
                'listing' => true,
                'editing' => false,
                'detail' => true,
                'updating' => false,
                'archive' => true
            ),
            array(
                'field' => 'updated_at',
                'name' => 'Ngày cập nhật',
                'type' => 'updated_at',
                'listing' => true,
                'editing' => false,
                'detail' => true,
                'updating' => false,
                'archive' => true
            ),
            array(
                'field' => 'id',
                'name' => 'Chi tiết',
                'type' => 'about',
                'filter' => 'about',
                'listing' => true,
                'editing' => false,
                'detail' => false,
                'updating' => false,
                'archive' => false
            ),
            array(
                'field' => 'id',
                'name' => 'Sửa',
                'type' => 'edit',
                'filter' => 'edit',
                'listing' => true,
                'editing' => false,
                'detail' => false,
                'updating' => false,
                'archive' => false
                
            ),
            array(
                'field' => 'id',
                'name' => 'Xóa',
                'type' => 'delete',
                'filter' => 'delete',
                'listing' => true,
                'editing' => false,
                'detail' => false,
                'updating' => false,
                'archive' => false
            ),
            array(
                'field' => 'back',
                'name' => 'Quay lại danh sách Sale',
                'type' => 'back',
                'listing' => false,
                'editing' => false,
                'detail' => true,
                'updating' => false,
                'archive' => false
            )
        );
        return array_merge($listingconfigs);
    }
}
