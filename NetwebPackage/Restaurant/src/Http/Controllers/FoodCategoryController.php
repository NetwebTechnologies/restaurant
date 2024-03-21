<?php

namespace Netweb\Restaurant\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Netweb\Restaurant\Models\FoodCategory;
use Netweb\Restaurant\Http\Controllers\CrudController;
use Netweb\Restaurant\Services\FoodCategoryService;
use Netweb\Restaurant\Http\Requests\FoodCategoryRequest;

class FoodCategoryController extends CrudController
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
        return new FoodCategory;
    }
    public function setService() : FoodCategoryService
    {
        return new FoodCategoryService;
    }
    public function createForm() : String
    {
        return 'restaurant::restaurant-food-category.create';
    }
    public function editForm() : String
    {
        return 'restaurant::restaurant-food-category.edit';
    }
    public function indexFile() : String
    {
        return 'restaurant::restaurant-food-category.index';
    }
    public function setRequest() : String
    {
        return FoodCategoryRequest::class;
    }
}
