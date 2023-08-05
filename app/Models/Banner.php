<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Base
{
    use HasFactory;
    use SoftDeletes;

    public $title = 'Quản Lý Banner';
    public $titlecreate = 'Thêm Mới - Banner Marketing';
    public $titleupdate = 'Cập Nhật - Banner Marketing';
    public $titledetail = 'Chi Tiết - Banner Marketing';
    public $titlearchive = 'Đã Xóa Gần Đây - Quản Lý Banner Marketing';

    protected $fillable = [
        'name',
        'image' => 'array',
        'created_at',
        'updated_at'
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
                'editing' => false,
                'detail' => true,
                'updating' => false,
                'archive' => true
            ),
            array(
                'field' => 'name',
                'name' => 'Tên Banner',
                'type' => 'name_banner',
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
                'field' => 'image',
                'name' => 'Ảnh sản phẩm Banner',
                'type' => 'image',
                'listing' => true,
                'editing' => true,
                'validate' => false,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'status',
                'name' => 'Status',
                'type' => 'status',
                'listing' => true,
                'editing' => true,
                'validate' => false,
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
                'updating' => true,
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
                'name' => 'Quay lại danh sách Banner',
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
