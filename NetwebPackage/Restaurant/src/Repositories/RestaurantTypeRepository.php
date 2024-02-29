<?php

namespace Netweb\Restaurant\Repositories;

use Netweb\Restaurant\Interfaces\CrudRepositoryInterface;
use Netweb\Restaurant\Models\RestaurantType;

class RestaurantTypeRepository implements CrudRepositoryInterface {
    public static function store($data) {
        try {
            $model = RestaurantType::create($data);
            if($model) {
                return [
                    'status' => true,
                    'code' => 200,
                    'message' => 'Restaurant Name is created Successfully',
                    'model' => $model
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
            $model = RestaurantType::find($id);
            if($model->update($data)) {
                return [
                    'status' => true,
                    'code' => 200,
                    'message' => 'Restaurant Name is updated Successfully',
                    'model' => $model
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
