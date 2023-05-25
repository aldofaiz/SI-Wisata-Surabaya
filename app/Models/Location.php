<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\MediaLibrary\InteractsWithMedia;
// use Spatie\MediaLibrary\HasMedia;

class Location extends Model //implements HasMedia
{
    //use HasFactory, InteractsWithMedia;
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'address',
        'description',
        // 'banner',
        // 'image',
        //'created_at',
    ];
}
