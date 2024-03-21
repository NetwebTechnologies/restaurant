<?php

namespace Netweb\Restaurant\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'restaurant_type_id' => 'required',
            'name'         => 'required',
            'owner_name'    => 'required',
            'contact'    => 'required',
            'address'    => 'required',
            'supplier_id'    => 'required',
            'country_id'    => 'required',
            'city_id'    => 'required',
            'valid_from_date'    => 'required',
            'valid_to_date'    => 'required',
            'valid_from_time'    => 'required',
            'valid_to_time'    => 'required',
            'no_of_tables'    => 'required',
            'description'    => 'required',
        ];
    }
}
