<?php

namespace Netweb\Restaurant\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_type_id',
        'name',
        'owner_name',
        'email',
        'contact',
        'address',
        'supplier_id',
        'country_id',
        'city_id',
        'valid_from_date',
        'valid_to_date',
        'valid_from_time',
        'valid_to_time',
        'no_of_tables',
        'blackout_days',
        'description',
        'restaurant_available_days'
    ];

    protected $casts = [
        'restaurant_available_days' => 'array',
        'valid_from_date' => 'date',
        'valid_to_date' => 'date',
        // 'valid_from_time' => 'time',
        // 'valid_to_time' => 'time',
    ];
}
