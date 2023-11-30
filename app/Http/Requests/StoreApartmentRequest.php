<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreApartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::id();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'exists:users,id',
            'name' => 'required|string|max:255',
            'rooms' => 'required|numeric|between:1,255',
            'beds' => 'required|numeric|between:1,255',
            'bathrooms' => 'required|numeric|between:1,255',
            'square_meters' => 'required|numeric|between:1,65000',
            'address' => 'required|string|max:255',
            'lat' => 'required|decimal:0,8',
            'lon' => 'required|decimal:0,8',
            'photo' => 'required|image',
            'visible' => 'nullable',
            'services' => 'required|array',
            'services.*' => 'exists:services,id'
        ];
    }
}
