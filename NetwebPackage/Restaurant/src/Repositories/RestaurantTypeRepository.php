<?php

namespace Netweb\Restaurant\Repositories;

use Illuminate\Database\Eloquent\Model;
use Netweb\Restaurant\Models\RestaurantType;
use Netweb\Restaurant\Repositories\MyRepository;

class RestaurantTypeRepository extends MyRepository
{
    public function __construct()
    {
        $this->model         = $this->setRepoModel();
    }

    public function setRepoModel() : Model
    {
        return new RestaurantType;
    }
}
