<?php

namespace Netweb\Restaurant\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantNameRequest extends FormRequest
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
        return [
            'restaurant_name' => 'required',
            'address'         => 'required',
            'phone_number'    => 'required',
        ];
    }
}
