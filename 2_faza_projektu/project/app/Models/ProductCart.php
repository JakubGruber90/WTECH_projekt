<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCart extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id','product_id', 'size', 'quantity'];
    public $timestamps = false;
    public $incrementing = false;

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
