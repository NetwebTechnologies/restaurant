<?php

namespace Netweb\Restaurant\Repositories;

class MyRepository {

    protected $model, $messageModelName;
    public function __construct($model)
    {
        $this->model = $model;
        $this->messageModelName = self::getMessaggeModel($this->model);
    }
    public function store($data) {
        try {
            $model = $this->model::create($data);
            if($model) {
                return [ 'status' => true, 'code' => 200, 'message' => $this->messageModelName . ' is created Successfully', 'model' => $model ];
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
    public function update($data, $id) {
        try {
            $model = $this->model::find($id);
            if($model->update($data)) {
                return [
                    'status' => true,
                    'code' => 200,
                    'message' => $this->messageModelName . ' is updated Successfully',
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

    public static function getMessaggeModel($model) {
        $string = $model;
        $parts = explode('\\', $string);
        $className = end($parts);
        $words = preg_split('/(?=[A-Z])/', $className);
        $restaurantName = implode(' ', $words);
        return $restaurantName;
    }
}
