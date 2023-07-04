<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    use HasFactory;
    public function defaultlistingConfigs()
    {
        return array(
            array(
                'field' => 'created_at',
                'name' => 'Ngày tạo',
                'type' => 'text'
            ),
            array(
                'field' => 'updated_at',
                'name' => 'Ngày cập nhật',
                'type' => 'text'
            )
        );
    }
}
