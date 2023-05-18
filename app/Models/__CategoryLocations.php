<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLocations extends Model
{
    use HasFactory;
    protected $table = 'location_category';
    public $timestamps = true;

    protected $fillable = [
        'category'

    ];
}
