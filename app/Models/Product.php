<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'stock', 
        'category_id', 
        'image_url'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}