<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_detail_id',
        'product_id',
        'quantity',
        'created_at',
        'updated_at',
    ];
}
