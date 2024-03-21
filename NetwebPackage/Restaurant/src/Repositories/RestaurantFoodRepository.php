<?php

namespace Netweb\Restaurant\Repositories;

use Illuminate\Database\Eloquent\Model;
use Netweb\Restaurant\Models\RestaurantFood;

class RestaurantFoodRepository extends MyRepository
{
    public function __construct()
    {
        $this->model = $this->setRepoModel();
    }

    public function setRepoModel() : Model
    {
        return new RestaurantFood;
    }
}
