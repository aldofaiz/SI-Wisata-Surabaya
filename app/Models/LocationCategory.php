<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationCategory extends Model
{
    use HasFactory;

    protected $table = 'location_categories';

    protected $fillable = [
        'name_category',
        'created_at',
    ];
}
