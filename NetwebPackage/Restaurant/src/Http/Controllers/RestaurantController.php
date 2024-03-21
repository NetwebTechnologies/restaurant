<?php

namespace Netweb\Restaurant\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Netweb\Restaurant\Models\Restaurant;
use Netweb\Restaurant\Services\RestaurantService;
use Netweb\Restaurant\Http\Controllers\CrudController;
use Netweb\Restaurant\Http\Requests\RestaurantRequest;

class RestaurantController extends CrudController
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
        return new Restaurant;
    }
    public function setService() : RestaurantService
    {
        return new RestaurantService;
    }
    public function createForm() : String
    {
        return 'restaurant::restaurant-detail.create';
    }
    public function editForm() : String
    {
        return 'restaurant::restaurant-detail.edit';
    }
    public function indexFile() : String
    {
        return 'restaurant::restaurant-detail.index';
    }
    public function setRequest() : String
    {
        return RestaurantRequest::class;
    }

    public function imagesIndex($restaurantID)
    {
        $restaurantID = decrypt($restaurantID);
        $model = $this->model->find($restaurantID);
        return view('restaurant::restaurant-detail.create', compact('model'));
    }

    public function imagesUploaded(Request $request) {
        dd($request->all());
    }
}
