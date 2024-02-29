<?php

namespace Netweb\Restaurant\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Netweb\Restaurant\Models\RestaurantName;
// use Netweb\Restaurant\DataTables\RestaurantNameDataTable;
use Netweb\Restaurant\Services\RestaurantNameService;
use Netweb\Restaurant\Http\Requests\RestaurantNameRequest;

class RestaurantNameController extends CrudController
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
        return new RestaurantName; // return model Instance
    }
    public function setService()
    {
        return new RestaurantNameService; // return Service
    }
    public function createForm() : String
    {
        return 'restaurant::restaurant-name.form'; // return create form file
    }
    public function editForm() : String
    {
        return 'restaurant::restaurant-name.form'; // return edit form file
    }
    public function indexFile() : String
    {
        return 'restaurant::restaurant-name.index'; // return edit form file
    }
    public function setRequest()
    {
        return RestaurantNameRequest::class; // return edit form file
    }
}
