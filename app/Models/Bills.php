<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Bills extends Base
{
    use HasFactory;
    public $title = 'Quản Lý Hóa Đơn';
    public function listingConfigs()
    {
        $defaultListingconfigs = parent::defaultlistingConfigs();
        $listingconfigs = array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text'
            ),
            array(
                'field' => 'name',
                'name' => 'Tên sản phẩm',
                'type' => 'text'
            ),
            array(
                'field' => 'price',
                'name' => 'Giá sản phẩm',
                'type' => 'number'
            ),
            array(
                'field' => 'image',
                'name' => 'Ảnh sản phẩm',
                'type' => 'image'
            )
        );
        return array_merge($listingconfigs,$defaultListingconfigs);
    }
}
