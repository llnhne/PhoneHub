<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Base
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
    ];

    public $title = 'Quản Lý Danh Mục';
    public $titlecreate = 'Thêm Mới - Danh Mục Sản Phẩm';
    public $titleupdate = 'Cập Nhật - Danh Mục Sản Phẩm';
    public $titledetail = 'Chi Tiết - Danh Mục Sản Phẩm';
    public $titlearchive = 'Đã Xóa Gần Đây - Quản Lý Danh Mục';
    
    public function products() 
    {
        return $this->hasMany(Product::class);
    }

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
                'name' => 'Tên danh mục',
                'type' => 'category_name',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'detail' => true,
                'validate' => 'required|max:100',
                'updating' => true,
                'archive' => true
            ),
            array(
                'field' => 'description',
                'name' => 'Mô tả danh mục',
                'type' => 'ckeditor',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'validate' => 'required|max:1000',
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
                'name' => 'Quay lại danh sách Danh Mục',
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
