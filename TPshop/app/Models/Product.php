<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Đảm bảo rằng tên bảng đúng
    protected $fillable = ['name', 'price', 'category_id', 'img', 'quantity', 'sold']; // Các trường bạn cần
}
