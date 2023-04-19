<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingType extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'price'];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    
}
