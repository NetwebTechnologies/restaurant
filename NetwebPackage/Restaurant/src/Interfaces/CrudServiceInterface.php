<?php

namespace Netweb\Restaurant\Interfaces;

use Illuminate\Http\Request;

interface CrudServiceInterface {

    public function store(Request $request);

    public function update(Request $request, int $id);
}
