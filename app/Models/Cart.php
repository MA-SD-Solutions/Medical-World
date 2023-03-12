<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function create_by()
    {
        return $this->belongsTo(User::class , 'created_by');
    }

    public function users()
    {
        return $this->hasMany(User::class , 'id','user_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class ,'id','product_id');
    }
}
