<?php

namespace Netweb\Restaurant\Interfaces;

interface CrudServiceInterface {

    public static function store($request);

    public static function update($request, $id);
}
