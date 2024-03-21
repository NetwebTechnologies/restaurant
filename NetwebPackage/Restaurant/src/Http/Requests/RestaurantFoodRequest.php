<?php

namespace Netweb\Restaurant\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantFoodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method() == 'PUT') {
            return [
                'name'                  => 'required',
                'price'                 => 'required',
                'unit_specification'    => 'required',
                'package_contains'      => 'required',
                'ingredients'           => 'required',
                'food_type'             => 'required',
                'restaurant_type_id'    => 'required',
                'food_category_id'      => 'required',
            ];
        } else {
            return [
                'name'                  => 'required',
                'price'                 => 'required',
                'unit_specification'    => 'required',
                'package_contains'      => 'required',
                'ingredients'           => 'required',
                'food_type'             => 'required',
                'restaurant_type_id'    => 'required',
                'food_category_id'      => 'required',
                'image'                 => 'required|image'
            ];
        }

    }
}
