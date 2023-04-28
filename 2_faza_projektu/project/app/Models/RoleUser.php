<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'role_id'];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function roles() {
        return $this->belongsTo(Roles::class);
    }
}