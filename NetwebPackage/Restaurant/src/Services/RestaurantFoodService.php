<?php

namespace Netweb\Restaurant\Services;

use Illuminate\Http\Request;
use Netweb\CommonServices\Traits\MyUpload;
use Netweb\Restaurant\Services\CrudService;
use Netweb\Restaurant\Models\RestaurantFood;
use Netweb\Restaurant\Repositories\RestaurantFoodRepository;

class RestaurantFoodService extends CrudService
{
    use MyUpload;
    /**
     * Store data using the provided request object.
     *
     * @param  \Illuminate\Http\Request|\App\Http\Requests\YourRequest  $request
     * @return void
     */
    public function store(Request $request)
    {
        $data = $request->only('name', 'description', 'restaurant_type_id', 'food_category_id', 'price',
        'discount', 'surge', 'unit_specification', 'package_contains', 'ingredients', 'food_type',
        'delivery_available', 'featured');
        if ($request->has('image')) {
            $data['image'] = self::singleFile($request->image, RestaurantFood::IMAGEPATH);
        }
        return (new RestaurantFoodRepository)->store($data);
    }
    public function update(Request $request, int $id)
    {
        $model = RestaurantFood::find($id);
        $data = $request->only('name', 'description', 'restaurant_type_id', 'food_category_id', 'price',
        'discount', 'surge', 'unit_specification', 'package_contains', 'ingredients', 'food_type',
        'delivery_available', 'featured');
        if ($request->has('image')) {
            $data['image'] = self::singleFile($request->image, RestaurantFood::IMAGEPATH);
            if ($model->image !== null) {
                self::deleteFile(RestaurantFood::IMAGEPATH . '/'. $model->image);
            }
        }
        return (new RestaurantFoodRepository)->update($data, $id);
    }
    public function destroy(string $id)
    {
        return (new RestaurantFoodRepository)->destroy($id);
    }
}
