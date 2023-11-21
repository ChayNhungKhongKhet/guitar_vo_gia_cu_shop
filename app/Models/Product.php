<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($product_id)
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'stock_quantity'
    ];
}
