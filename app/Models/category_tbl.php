<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_tbl extends Model
{
    use HasFactory;
    protected $fillable = ['category_name', 'category_image', 'category_status'];
}
