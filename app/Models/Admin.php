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
                'name' => 'Tên quản trị viên',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true
            ),
            array(
                'field' => 'image',
                'name' => 'Ảnh quản trị viên',
                'type' => 'image'
            ),
            array(
                'field' => 'email',
                'name' => 'Email quản trị viên',
                'type' => 'text',
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
                'name' => 'Xóa',
                'type' => 'delete',
                'filter' => 'delete'
            )
        );
        return array_merge($listingconfigs);
    }
}
