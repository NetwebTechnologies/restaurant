<?php

namespace Netweb\Restaurant\Repositories;

use Illuminate\Database\Eloquent\Model;
use Netweb\Restaurant\Models\RestaurantName;

class RestaurantNameRepository extends MyRepository
{
    public function __construct()
    {
        $this->model = $this->setRepoModel();
        $this->storeMessage = $this->storeMessage();
        $this->updateMessage = $this->updateMessage();
    }

    public function setRepoModel() : Model
    {
        return new RestaurantName;
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
