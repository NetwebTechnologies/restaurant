<?php

namespace Netweb\Restaurant\Repositories;

use Netweb\Restaurant\Models\RestaurantName;
use Netweb\Restaurant\Interfaces\CrudRepositoryInterface;

class RestaurantNameRepository implements CrudRepositoryInterface {
    public static function store($data) {
        try {
            $restaurantName = RestaurantName::create($data);
            if($restaurantName) {
                return [
                    'status' => true,
                    'code' => 200,
                    'message' => 'Restaurant Name is created Successfully',
                    'model' => $restaurantName
                ];
            }
            throw new \Exception('Something went wrong!', 1);
        } catch (\Throwable $th) {
            return [
                'status' => false,
                'code' => 400,
                'message' => $th->getMessage()
            ];
        }
    }
    public static function update($data, $id) {
        try {
            $restaurantName = RestaurantName::find($id);
            if($restaurantName->update($data)) {
                return [
                    'status' => true,
                    'code' => 200,
                    'message' => 'Restaurant Name is updated Successfully',
                    'model' => $restaurantName
                ];
            }
            throw new \Exception('Something went wrong!', 1);
        } catch (\Throwable $th) {
            return [
                'status' => false,
                'code' => 400,
                'message' => $th->getMessage()
            ];
        }
    }
}
