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
        $this->storeMessage  = $this->storeMessage();
        $this->updateMessage = $this->updateMessage();
    }

    public function setRepoModel() : Model
    {
        return new RestaurantType;
    }
    public function storeMessage() : String
    {
        return 'Restaurant Name is created Successfully';
    }
    public function updateMessage() : String
    {
        return 'Restaurant Name is updated Successfully';
    }
}
