<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories'; // Đảm bảo rằng tên bảng đúng
    protected $fillable = ['name', 'description', 'parent_id']; // Các trường bạn cần
}
