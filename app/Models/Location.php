<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\MediaLibrary\InteractsWithMedia;
// use Spatie\MediaLibrary\HasMedia;
use app\Model\LocationCategory;

class Location extends Model //implements HasMedia
{
    //use HasFactory, InteractsWithMedia;
    use HasFactory;

    protected $fillable = [
        'category_id',
        'location_name',
        'address',
        'description',
        'banner',
        'image',
        'image2',
        'image3',
        // 'created_at',
    ];

    public function locationCategory()
    {
        return $this->belongsTo(LocationCategory::class);
    }
}
