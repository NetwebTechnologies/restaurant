<?php

namespace Netweb\Restaurant\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RestaurantType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'status',
    ];
}
