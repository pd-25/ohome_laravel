<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_image',
        'property_description',
        'rent_price',
        'address',
        'bed',
        'bathroom',
        'state',
        'owner_name',
        'owner_contact',
        'pin',
        'user_id'
    ];

}
