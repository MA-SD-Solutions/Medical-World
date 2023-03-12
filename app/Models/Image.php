<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Image extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class , 'created_by');
    }

    public function services()
    {
        return $this->belongsTo(Service::class , 'type');
    }
}
