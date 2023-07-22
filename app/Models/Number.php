<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Base
{
    use HasFactory;

    protected $fillable = [
        'price'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
