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
    public $titleupdate = 'Cập Nhật - Tài Khoản';
    public $titledetail = 'Chi Tiết - Tài Khoản';
    public $titlearchive = 'Đã Xóa Gần Đây - Quản Lý Admin';
    
    protected $fillable = [
        'name',
        'price',
        'image',
        'email'
    ];
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
                'detail' => true,
                'editing' => false,
                'updating' => false,
                'archive' => true
            ),
            array(
                'field' => 'name',
                'name' => 'Tên quản trị viên',
                'type' => 'name',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'detail' => true,
                'editing' => false,
                'updating' => true,
                'archive' => true
            ),
            array(
                'field' => 'image',
                'name' => 'Ảnh quản trị viên',
                'type' => 'image',
                'listing' => true,
                'detail' => true,
                'editing' => false,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'email',
                'name' => 'Email quản trị viên',
                'type' => 'text',
                'sort' => true,
                'listing' => true,
                'detail' => true,
                'editing' => false,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'password',
                'name' => 'Password',
                'type' => 'password',
                'sort' => false,
                'listing' => true,
                'detail' => false,
                'editing' => false,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'created_at',
                'name' => 'Ngày tạo',
                'type' => 'created_at',
                'listing' => true,
                'detail' => true,
                'editing' => false,
                'updating' => false,
                'archive' => true
            ),
            array(
                'field' => 'updated_at',
                'name' => 'Ngày cập nhật',
                'type' => 'updated_at',
                'listing' => true,
                'detail' => true,
                'editing' => false,
                'updating' => false,
                'archive' => true
            ),
            array(
                'field' => 'name',
                'name' => 'Chi tiết',
                'type' => 'about',
                'filter' => 'about',
                'listing' => false,
                'detail' => false,
                'editing' => false,
                'updating' => false,
                'archive' => false
            ),
            array(
                'field' => 'name',
                'name' => 'Xóa',
                'type' => 'delete',
                'filter' => 'delete',
                'listing' => false,
                'detail' => false,
                'editing' => false,
                'updating' => false,
                'archive' => false
            ),
            array(
                'field' => 'back',
                'name' => 'Quay lại danh sách Admin',
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
