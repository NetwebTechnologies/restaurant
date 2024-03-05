<?php

namespace Netweb\Restaurant\Services;

use Illuminate\Http\Request;
use Netweb\Restaurant\Services\CrudService;
use Netweb\Restaurant\Repositories\RestaurantTypeRepository;

class RestaurantTypeService extends CrudService {
    public function store(Request $request) {
        $data = $request->only('name');
        return (new RestaurantTypeRepository)->store($data);
    }
    public function update(Request $request, int $id) {
        $data = $request->only('name');
        return (new RestaurantTypeRepository)->update($data, $id);
    }
    public function destroy(string $id)
    {
        return (new RestaurantTypeRepository)->destroy($id);
    }
}
