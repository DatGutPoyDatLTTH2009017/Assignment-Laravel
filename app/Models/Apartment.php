<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'address',
        'price',
        'general information',
        'details',
        'avatar',
        'status'
    ];
}
