<?php

namespace Netweb\Restaurant\Models;

use Illuminate\Database\Eloquent\Model;
use Netweb\Restaurant\Models\RestaurantType;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RestaurantFood extends Model
{
    use HasFactory;
    const IMAGEPATH = 'restaurant/food-category';
    protected $fillable = [
        'name',
        'description',
        'restaurant_type_id',
        'food_category_id',
        'price',
        'discount',
        'surge',
        'unit_specification',
        'package_contains',
        'ingredients',
        'food_type',
        'delivery_available',
        'featured',
        'image',
    ];

    public function getImageUrlAttribute(){
        return asset('storage/uploads/'.self::IMAGEPATH.'/'.$this->image);
    }
    public function restaurantType() {
        return $this->belongsTo(RestaurantType::class, 'restaurant_type_id', 'id');
    }
    public function foodCategory() {
        return $this->belongsTo(FoodCategory::class, 'food_category_id', 'id');
    }
}
