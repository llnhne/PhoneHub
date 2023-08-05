<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Base;

class Coupon extends Base
{
    use HasFactory;
    use SoftDeletes;

    public $title = 'Quản Lý Coupon';
    public $titlecreate = 'Thêm Mới - Coupon';
    public $titleupdate = 'Cập Nhật - Coupon';
    public $titledetail = 'Chi Tiết - Coupon';
    public $titlearchive = 'Đã Xóa Gần Đây - Quản Lý Coupon';
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
                'name' => 'Tên coupon',
                'type' => 'name_coupon',
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
                'field' => 'coupon_code',
                'name' => 'Mã giảm giá',
                'type' => 'coupon_code',
                'sort' => false,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|max:100',
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'coupon_time',
                'name' => 'Số lượng mã',
                'type' => 'coupon_time',
                'sort' => false,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|min:2|max:10',
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'coupon_condition',
                'name' => 'Tính năng mã',
                'type' => 'coupon_condition',
                'sort' => false,
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'coupon_number',
                'name' => 'Số % hoặc số tiền giảm',
                'type' => 'coupon_number',
                'sort' => false,
                'listing' => true,
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
                'name' => 'Quay lại danh sách Coupon',
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
