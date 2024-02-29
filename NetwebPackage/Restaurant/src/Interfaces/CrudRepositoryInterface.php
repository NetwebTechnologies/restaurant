<?php

namespace Netweb\Restaurant\Interfaces;

interface CrudRepositoryInterface {

    // Prepared Data to be stored
    public static function store($data);

    // Prepared Data to be updated along with its id
    public static function update($data, $id);
}
