<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id','shipping_id','payment_id', 'cart_id', 'price', 'status', 'created_at', 'shipped_at'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function payment_methods()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function shipping_types()
    {
        return $this->belongsTo(ShippingType::class);
    }

    public function carts()
    {
        return $this->belongsTo(Cart::class);
    }
}