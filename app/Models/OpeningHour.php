<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'closes',
        'opens',
        'dayOfWeek',
        'validFrom',
        'validThrough',
    ];

    protected $dates = [
        'closes',
        'opens',
        'validFrom',
        'validThrough',
    ];

}
