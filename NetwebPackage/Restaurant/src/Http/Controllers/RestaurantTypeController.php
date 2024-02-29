<?php

namespace Netweb\Restaurant\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Netweb\Restaurant\Models\RestaurantType;
use Netweb\Restaurant\Services\RestaurantTypeService;
use Netweb\Restaurant\Http\Requests\RestaurantTypeRequest;
use PhpParser\Node\Expr\Cast\String_;

class RestaurantTypeController extends CrudController
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
        return new RestaurantType; // return model Instance
    }
    public function setService()
    {
        return new RestaurantTypeService; // return Service
    }
    public function createForm() : String
    {
        return 'restaurant::restaurant-type.form'; // return create form file
    }
    public function editForm() : String
    {
        return 'restaurant::restaurant-type.form'; // return edit form file
    }
    public function indexFile() : String
    {
        return 'restaurant::restaurant-type.index'; // return edit form file
    }
    public function setRequest()
    {
        return RestaurantTypeRequest::class; // return edit form file
    }
}
