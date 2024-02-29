<?php

namespace Netweb\Restaurant\Interfaces;

interface CrudControllerInterface
{
    public function create();

    public function show($id);

    public function edit($id);

    public function destroy($id);
}
