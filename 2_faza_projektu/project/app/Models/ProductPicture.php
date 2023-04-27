<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['product_id', 'picture_url'];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_id');
    }

}
