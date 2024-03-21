<?php

namespace Netweb\Restaurant\Services;

use Illuminate\Http\Request;
use Netweb\CommonServices\Traits\MyUpload;
use Netweb\Restaurant\Models\FoodCategory;
use Netweb\Restaurant\Services\CrudService;
use Netweb\Restaurant\Repositories\FoodCategoryRepository;

class FoodCategoryService extends CrudService
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
        $data = $request->only('name', 'description');
        if ($request->has('image')) {
            $data['image'] = self::singleFile($request->image, FoodCategory::IMAGEPATH);
        }
        return (new FoodCategoryRepository)->store($data);
    }
    public function update(Request $request, int $id)
    {
        $model = FoodCategory::find($id);
        $data = $request->only('name', 'description');
        if ($request->has('image')) {
            $data['image'] = self::singleFile($request->image, FoodCategory::IMAGEPATH);
            if ($model->image !== null) {
                self::deleteFile(FoodCategory::IMAGEPATH . '/'. $model->image);
            }
        }
        return (new FoodCategoryRepository)->update($data, $id);
    }
    public function destroy(string $id)
    {
        return (new FoodCategoryRepository)->destroy($id);
    }
}
