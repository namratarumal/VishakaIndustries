<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login_tbl extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'username', 'password', 'image'];
}
