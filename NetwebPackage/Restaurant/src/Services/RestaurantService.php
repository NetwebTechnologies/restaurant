<?php

namespace Netweb\Restaurant\Services;

use Illuminate\Http\Request;
use Netweb\Restaurant\Services\CrudService;
use Netweb\Restaurant\Repositories\RestaurantRepository;

class RestaurantService extends CrudService
{
    /**
     * Store data using the provided request object.
     *
     * @param  \Illuminate\Http\Request|\App\Http\Requests\YourRequest  $request
     * @return void
     */
    public function store(Request $request)
    {
        $data = $request->only('restaurant_type_id', 'name', 'owner_name', 'email',  'contact', 'address', 'supplier_id',
        'country_id', 'city_id', 'valid_from_date', 'valid_to_date', 'valid_from_time', 'valid_to_time', 'no_of_tables',
        'blackout_days', 'description');
        $data['restaurant_available_days'] = json_encode($request->get('restaurant_available_days'));
        return (new RestaurantRepository)->store($data);
    }
    public function update(Request $request, int $id)
    {
        $data = $request->only('restaurant_type_id', 'name', 'owner_name', 'email',  'contact', 'address', 'supplier_id',
        'country_id', 'city_id', 'valid_from_date', 'valid_to_date', 'valid_from_time', 'valid_to_time', 'no_of_tables',
        'blackout_days', 'description');
        $data['restaurant_available_days'] = json_encode($request->get('restaurant_available_days'));
        dd($data);
        return (new RestaurantRepository)->update($data, $id);
    }
    public function destroy(string $id)
    {
        return (new RestaurantRepository)->destroy($id);
    }
}
