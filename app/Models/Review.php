<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'food_review',
        'delivery_review',
        'delivery_time',
        'author',
        'comments',
    ];
}
