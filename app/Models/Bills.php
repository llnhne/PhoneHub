<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Bills extends Base
{
    use HasFactory;
    public $title = 'Quản Lý Hóa Đơn';
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
                'editing' => true
            ),
            array(
                'field' => 'bill_name',
                'name' => 'Mã đơn hàng',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'editing' => true
            ),
            array(
                'field' => 'user_name',
                'name' => 'Tên khách hàng',
                'type' => 'text',
                'sort' => true,
                'listing' => true,
                'editing' => true
            ),
            array(
                'field' => 'email',
                'name' => 'Email khách hàng',
                'type' => 'email',
                'sort' => false,
                'listing' => false,
                'editing' => true
            ),
            array(
                'field' => 'phone_number',
                'name' => 'Số điện thoại',
                'type' => 'tel',
                'sort' => false,
                'listing' => false,
                'editing' => true
            ),
            array(
                'field' => 'address',
                'name' => 'Địa chỉ',
                'type' => 'text',
                'sort' => false,
                'listing' => false,
                'editing' => true
            ),
            array(
                'field' => 'sum_price',
                'name' => 'Tổng tiền',
                'type' => 'number',
                'sort' => true,
                'listing' => true,
                'editing' => true
            ),
            array(
                'field' => 'description',
                'name' => 'Ghi chú',
                'type' => 'description',
                'sort' => false,
                'listing' => false,
                'editing' => true
            ),
            array(
                'field' => 'users_id',
                'name' => 'Mã khách hàng',
                'type' => 'users_id',
                'listing' => false,
                'editing' => true
            ),
            array(
                'field' => 'pays_id',
                'name' => 'Mã thanh toán',
                'type' => 'pays_id',
                'listing' => true,
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
