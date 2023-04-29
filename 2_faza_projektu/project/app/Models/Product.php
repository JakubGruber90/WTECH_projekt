<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','category', 'price', 'brand'];

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function product_carts() {
        return $this->belongsToMany(ProductCart::class);
    }
    
    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
