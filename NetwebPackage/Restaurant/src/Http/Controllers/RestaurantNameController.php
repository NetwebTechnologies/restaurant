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
        return new RestaurantName;
    }
    public function setService() : RestaurantNameService
    {
        return new RestaurantNameService;
    }
    public function createForm() : String
    {
        return 'restaurant::restaurant-name.create';
    }
    public function editForm() : String
    {
        return 'restaurant::restaurant-name.edit';
    }
    public function indexFile() : String
    {
        return 'restaurant::restaurant-name.index';
    }
    public function setRequest() : String
    {
        return RestaurantNameRequest::class;
    }
}
