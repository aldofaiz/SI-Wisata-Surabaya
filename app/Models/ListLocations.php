<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListLocations extends Model
{
    use HasFactory;
    protected $table = 'location';

    public $timestamps = true;

    protected $fillable = [
        'category_id',
        'name',
        'address',
        'description',
        'banner',
        'image',
        'created_at',
    ];


    protected $casts = [
        
    ];

    protected $hidden = [
        
    ];
}
