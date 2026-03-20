<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; // Khai báo tên bảng

    protected $fillable = [
        'img', 
        'name', 
        'desc', 
        'price', 
        'categories_id'
];
}
