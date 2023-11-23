<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'price',
        'category_id',
        'stock_quantity',
        'created_at',
        'updated_at',
    ];
}
