<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'products_name',
        'products_code',
        'products_price',
        'products_review',
        'products_tag',
        'products_category',
        'products_image',
        'products_size',
        'products_description',
        'products_color',
        'products_material',
        'products_deliverymethod',
        'products_return',
        'products_postage',
        'products_deleteflag',
    ];

}
