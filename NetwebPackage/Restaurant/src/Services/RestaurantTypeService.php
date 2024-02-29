<?php

namespace Netweb\Restaurant\Services;

use Netweb\Restaurant\Models\RestaurantType;
use Netweb\Restaurant\Repositories\MyRepository;
use Netweb\Restaurant\Interfaces\CrudServiceInterface;

class RestaurantTypeService implements CrudServiceInterface {
    public static function store($request) {
        $data = $request->only('name');
        return (new MyRepository(RestaurantType::class))->store($data);
    }
    public static function update($request, $id) {
        $data = $request->only('name');
        return (new MyRepository(RestaurantType::class))->update($data, $id);
    }
}
