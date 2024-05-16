<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'uniq_id',
        'category',
        'name',
        'description',
        'price',
        'old_price',
        'url_picture',
    ];

}
