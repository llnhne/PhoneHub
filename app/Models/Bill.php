<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Base
{
    use HasFactory;
    use SoftDeletes;

    public $title = 'Quản Lý Hóa Đơn';
    public $titleupdate = 'Cập Nhật - Hóa Đơn';
    public $titledetail = 'Chi Tiết - Hóa Đơn';
    public $titlearchive = 'Đã Xóa Gần Đây - Quản Lý Hóa Đơn';
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
                'editing' => true,
                'detail' => true,
                'updating' => false,
                'archive' => true
            ),
            array(
                'field' => 'bill_name',
                'name' => 'Mã đơn hàng',
                'type' => 'bill_name',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'detail' => true,
                'updating' => false,
                'archive' => true
            ),
            array(
                'field' => 'user_name',
                'name' => 'Tên khách hàng',
                'type' => 'user_name',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'email',
                'name' => 'Email khách hàng',
                'type' => 'email',
                'sort' => false,
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'phone_number',
                'name' => 'Số điện thoại',
                'type' => 'tel',
                'sort' => false,
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'address',
                'name' => 'Địa chỉ',
                'type' => 'address',
                'sort' => false,
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'sum_price',
                'name' => 'Tổng tiền',
                'type' => 'sum_price',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'description',
                'name' => 'Ghi chú',
                'type' => 'description',
                'sort' => false,
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'user_id',
                'name' => 'Mã khách hàng',
                'type' => 'user_id',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => false,
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
                'name' => 'Quay lại danh sách Hóa Đơn',
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
