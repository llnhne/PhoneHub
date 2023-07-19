<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Product extends Base
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'brand_id',
        'category_id'
    ];
    public $title = 'Quản Lý Sản Phẩm';
    public $titlecreate = 'Thêm Mới - Sản Phẩm';

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
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
                'editing' => false
            ),
            array(
                'field' => 'name',
                'name' => 'Tên sản phẩm',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|max:100'
            ),
            array(
                'field' => 'price',
                'name' => 'Giá sản phẩm',
                'type' => 'number',
                'filter' => 'between',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|min:5|max:12'
            ),
            array(
                'field' => 'image',
                'name' => 'Ảnh sản phẩm',
                'type' => 'image',
                'listing' => true,
                'editing' => true,
                'validate' => 'required|mimes:jpeg,png,jpg,gif'
            ),
            array(
                'field' => 'brand_id',
                'name' => 'Loại thương hiệu sản phẩm',
                'type' => 'brand_id',
                'listing' => false,
                'editing' => true
            ),
            array(
                'field' => 'category_id',
                'name' => 'Loại danh mục sản phẩm',
                'type' => 'category_id',
                'listing' => false,
                'editing' => true
            ),
            array(
                'field' => 'description',
                'name' => 'Mô tả sản phẩm',
                'type' => 'ckeditor',
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
