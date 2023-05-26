<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LocationCategory;

class Location extends Model 
{
    use HasFactory;

    protected $fillable = [
        'location_category_id',
        'location_name',
        'address',
        'description',
        'banner',
        'image',
        'image2',
        'image3',
    ];

    public function locationCategory()
    {
        return $this->belongsTo(LocationCategory::class);
    }
}
