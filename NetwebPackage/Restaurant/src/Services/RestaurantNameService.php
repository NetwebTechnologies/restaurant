<?php

namespace Netweb\Restaurant\Services;

use Netweb\Restaurant\Models\RestaurantName;
use Netweb\Restaurant\Repositories\MyRepository;
use Netweb\Restaurant\Interfaces\CrudServiceInterface;

class RestaurantNameService implements CrudServiceInterface {
    public static function store($request) {
        $data = $request->only('restaurant_name', 'address', 'phone_number');
        return (new MyRepository(RestaurantName::class))->store($data);
    }
    public static function update($request, $id) {
        $data = $request->only('restaurant_name', 'address', 'phone_number');
        return (new MyRepository(RestaurantName::class))->update($data, $id);
    }
}
