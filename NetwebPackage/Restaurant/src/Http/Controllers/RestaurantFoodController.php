<?php

namespace Netweb\Restaurant\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Netweb\Restaurant\Models\RestaurantFood;
use Netweb\Restaurant\Services\RestaurantFoodService;
use Netweb\Restaurant\Http\Controllers\CrudController;
use Netweb\Restaurant\Http\Requests\RestaurantFoodRequest;

class RestaurantFoodController extends CrudController
{
    public function __construct()
    {
        $this->model = $this->setModel();
        $this->service = $this->setService();
        $this->createForm = $this->createForm();
        $this->editForm = $this->editForm();
        $this->setRequest = $this->setRequest();
        $this->indexFile = $this->indexFile();
    }
    public function setModel() : Model
    {
        return new RestaurantFood;
    }
    public function setService() : RestaurantFoodService
    {
        return new RestaurantFoodService;
    }
    public function createForm() : String
    {
        return 'restaurant::restaurant-food.create';
    }
    public function editForm() : String
    {
        return 'restaurant::restaurant-food.edit';
    }
    public function indexFile() : String
    {
        return 'restaurant::restaurant-food.index';
    }
    public function setRequest() : String
    {
        return RestaurantFoodRequest::class;
    }
}
