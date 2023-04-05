<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class , 'created_by');
    }

    public function billDetails()
    {
        return $this->hasMany(Bill_details::class , 'bill');
    }
}
