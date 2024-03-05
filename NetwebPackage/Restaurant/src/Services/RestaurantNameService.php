<?php

namespace Netweb\Restaurant\Services;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Netweb\Restaurant\Services\CrudService;
use Netweb\Restaurant\Models\RestaurantName;
use Netweb\Restaurant\Repositories\MyRepository;
use Netweb\Restaurant\Repositories\RestaurantNameRepository;

class RestaurantNameService extends CrudService
{
    /**
     * Store data using the provided request object.
     *
     * @param  \Illuminate\Http\Request|\App\Http\Requests\YourRequest  $request
     * @return void
     */

    public function store(Request $request)
    {
        $data = $request->only('restaurant_name', 'address', 'phone_number');
        return (new RestaurantNameRepository)->store($data);
    }
    public function update(Request $request, int $id)
    {
        $data = $request->only('restaurant_name', 'address', 'phone_number');
        return (new RestaurantNameRepository)->update($data, $id);
    }
    public function destroy(int $id)
    {
        return (new RestaurantNameRepository)->destroy($id);
    }
}
