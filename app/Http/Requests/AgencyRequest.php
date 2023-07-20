<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgencyRequest extends FormRequest
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
            'user_id' => ['nullable', 'integer'],
            'name' => ['required'],
            'person_name' => ['required'],
            'phone' => ['required'],
            'local_phone' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'fax' => ['nullable', 'integer'],
            'description' => ['required'],
            'country_id' => ['required', 'integer'],
            'zone_id' => ['required', 'integer'],
            'city_id' => ['required', 'integer'],
            'plaque' => ['required', 'integer'],
            'postal_code' => ['required'],
            'address' => ['required'],
            'latlng' => ['required'],
            'instagram' => ['nullable'],
            'telegram' => ['nullable'],
            'facebook' => ['nullable'],
        ];
    }
}
