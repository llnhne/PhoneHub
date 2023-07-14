<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use App\Models\Base;

class Admin extends Base implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    public $title = 'Quản Lý Tài Khoản';
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
                'listing' => true
            ),
            array(
                'field' => 'name',
                'name' => 'Tên quản trị viên',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true,
                'listing' => true
            ),
            array(
                'field' => 'image',
                'name' => 'Ảnh quản trị viên',
                'type' => 'image',
                'listing' => true
            ),
            array(
                'field' => 'email',
                'name' => 'Email quản trị viên',
                'type' => 'text',
                'sort' => true,
                'listing' => true
            ),
            array(
                'field' => 'created_at',
                'name' => 'Ngày tạo',
                'type' => 'text',
                'sort' => true,
                'listing' => true
            ),
            array(
                'field' => 'updated_at',
                'name' => 'Ngày cập nhật',
                'type' => 'text',
                'sort' => true,
                'listing' => true
            ),
            array(
                'field' => 'name',
                'name' => 'Chi tiết',
                'type' => 'about',
                'filter' => 'about',
                'listing' => true
            ),
            array(
                'field' => 'name',
                'name' => 'Xóa',
                'type' => 'delete',
                'filter' => 'delete',
                'listing' => true
            )
        );
        return array_merge($listingconfigs);
    }
}
