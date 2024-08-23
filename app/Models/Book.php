<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'stock', 'price', 'category', 'status', 'created_at', 'updated_at'];
}
