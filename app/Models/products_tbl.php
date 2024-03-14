<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products_tbl extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'title', 'materials', 'quality', 'use', 'sizes', 'gms', 'colors', 'product_image', 'product_status',];
}
