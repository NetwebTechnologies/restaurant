<?php

namespace Netweb\Restaurant\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    use HasFactory;

    const IMAGEPATH = 'restaurant/food-category';

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function getImageUrlAttribute(){
        return asset('storage/uploads/'.self::IMAGEPATH.'/'.$this->image);
    }
}
