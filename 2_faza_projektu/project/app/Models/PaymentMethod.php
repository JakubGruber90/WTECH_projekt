<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title'];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    
}
