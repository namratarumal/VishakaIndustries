<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enquiry_tbl extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'mobile_no', 'address', 'description'];
}
