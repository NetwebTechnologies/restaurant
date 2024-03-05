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
        return new RestaurantType;
    }
    public function setService() : RestaurantTypeService
    {
        return new RestaurantTypeService;
    }
    public function createForm() : String
    {
        return 'restaurant::restaurant-type.create';
    }
    public function editForm() : String
    {
        return 'restaurant::restaurant-type.edit';
    }
    public function indexFile() : String
    {
        return 'restaurant::restaurant-type.index';
    }
    public function setRequest() : String
    {
        return RestaurantTypeRequest::class;
    }

}
