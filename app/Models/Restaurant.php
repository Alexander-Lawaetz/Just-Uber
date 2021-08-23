<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'phone_number',
        'email',
        'street',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
