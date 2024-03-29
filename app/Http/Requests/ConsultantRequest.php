<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultantRequest extends FormRequest
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
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'country_id' => ['required', 'integer'],
            'zone_id' => ['required', 'integer'],
            'city_id' => ['required', 'integer'],
            'national_code' => ['required' , 'numeric'],
            'image' => ['mimes:jpg,jpeg,png,webp'],
        ];
    }
}
