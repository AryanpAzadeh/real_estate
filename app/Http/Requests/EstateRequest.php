<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'consultant_id' => ['required'],
            'title' => ['required'],
            'category' => ['required'],
            'type_id' => ['required'],
            'country_id' => ['required', 'integer'],
            'zone_id' => ['required'],
            'city_id' => ['required'],
            'plaque' => ['required', 'integer'],
            'postal_code' => ['required'],
            'address' => ['required'],
            'latlng' => ['required'],
            'area' => ['required'],
            'bedrooms' => ['required'],
            'wc' => ['required'],
            'parking' => ['required'],
            'features' => ['required'],
            'pet' => ['required', 'integer'],
            'description' => ['required'],
            'price' => ['required'],
            'price_type' => ['required'],
        ];
    }
}
