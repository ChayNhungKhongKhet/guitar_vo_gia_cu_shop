<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_itiem extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'product',
        'quantity',
        'status',
        'create_at',
        'update_at',
    ];
}
