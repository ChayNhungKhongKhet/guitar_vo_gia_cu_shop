<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['id', 'name', 'distributor', 'price', 'description', 'category_id', 'remain', 'link_img'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public $timestamps = false;
}
