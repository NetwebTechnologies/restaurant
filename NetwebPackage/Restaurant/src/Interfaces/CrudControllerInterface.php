<?php

namespace Netweb\Restaurant\Interfaces;

interface CrudControllerInterface
{
    public function create();

    public function show(string $id); // encrypted

    public function edit(string $id); // encrypted

    public function destroy(string $id); // encrypted

}
