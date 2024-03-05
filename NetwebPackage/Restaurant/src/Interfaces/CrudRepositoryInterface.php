<?php

namespace Netweb\Restaurant\Interfaces;

interface CrudRepositoryInterface {

    // Prepared Data to be stored
    public function store(array $data);

    // Prepared Data to be updated along with its id
    public function update(array $data, int $id);
}
