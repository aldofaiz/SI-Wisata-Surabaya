<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $table = 'review';
    public $timestamps = true;
    
    protected $fillable = [
        'user_id',
        'location_id',
        'reviews',
        'created_at'
    ];
    protected $hidden = [

    ];
    protected $casts = [
        
    ];
}
