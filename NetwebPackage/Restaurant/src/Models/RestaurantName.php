<?php

namespace Netweb\Restaurant\Models;

use Illuminate\Database\Eloquent\Model;

class RestaurantName extends Model
{
    protected $fillable = [
        'restaurant_name',
        'address',
        'phone_number',
        'status',
    ];
}
