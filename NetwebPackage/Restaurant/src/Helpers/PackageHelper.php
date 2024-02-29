<?php

use Netweb\Restaurant\Models\RestaurantName;

function getRestaurentsList() {
    return RestaurantName::all();
}