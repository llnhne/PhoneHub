<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Categories extends Base
{
    use HasFactory;
    public $title = 'Quản Lý Danh Mục';
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
                'name' => 'Tên danh mục',
                'type' => 'text'
            )
        );
        return array_merge($listingconfigs,$defaultListingconfigs);
    }
}
