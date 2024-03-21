<?php

namespace Netweb\Restaurant\Repositories;

use Illuminate\Database\Eloquent\Model;
use Netweb\Restaurant\Models\FoodCategory;


class FoodCategoryRepository extends MyRepository
{
    public function __construct()
    {
        $this->model = $this->setRepoModel();
    }

    public function setRepoModel() : Model
    {
        return new FoodCategory();
    }
}
