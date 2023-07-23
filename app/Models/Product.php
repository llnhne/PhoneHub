<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Base
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'image',
        'number_name',
        'description',
        'brand_id',
        'category_id',
        'color_id',
        'ram_id',
        'rom_id',
        'chip',
        'screen_id'
    ];
    public $title = 'Quản Lý Sản Phẩm';
    public $titlecreate = 'Thêm Mới - Sản Phẩm';
    public $titleupdate = 'Cập Nhật - Sản Phẩm';
    public $titledetail = 'Chi Tiết - Sản Phẩm';
    public $titlearchive = 'Đã Xóa Gần Đây - Quản Lý Sản Phẩm';

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function color(){
        return $this->belongsTo(Color::class);
    }

    public function ram(){
        return $this->belongsTo(Ram::class);
    }

    public function rom(){
        return $this->belongsTo(Rom::class);
    }

    public function chip(){
        return $this->belongsTo(Chip::class);
    }

    public function Screen(){
        return $this->belongsTo(Screen::class);
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
                'name' => 'Tên sản phẩm',
                'type' => 'product_name',
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
                'field' => 'price',
                'name' => 'Giá sản phẩm',
                'type' => 'number',
                'filter' => 'between',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'detail' => true,
                'validate' => 'required|min:5|max:12',
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'image',
                'name' => 'Ảnh sản phẩm',
                'type' => 'image',
                'listing' => true,
                'editing' => true,
                'detail' => true,
                'validate' => 'required|mimes:jpeg,png,jpg,gif',
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'brand_id',
                'name' => 'Loại thương hiệu sản phẩm',
                'type' => 'brand_id',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'category_id',
                'name' => 'Loại danh mục sản phẩm',
                'type' => 'category_id',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'color_id',
                'name' => 'Loại màu sắc',
                'type' => 'color_id',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'number_name',
                'name' => 'Số lượng',
                'type' => 'number_name',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'validate' => 'required|min:1|max:4|gt:1',
                'archive' => false
            ),
            array(
                'field' => 'ram_id',
                'name' => 'Loại Ram',
                'type' => 'ram_id',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'rom_id',
                'name' => 'Loại Rom',
                'type' => 'rom_id',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'chip_id',
                'name' => 'Loại Chip',
                'type' => 'chip_id',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'screen_id',
                'name' => 'Loại màn hình',
                'type' => 'screen_id',
                'listing' => false,
                'editing' => true,
                'detail' => true,
                'updating' => true,
                'archive' => false
            ),
            array(
                'field' => 'description',
                'name' => 'Mô tả sản phẩm',
                'type' => 'ckeditor',
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
                'name' => 'Quay lại danh sách Sản Phẩm',
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
