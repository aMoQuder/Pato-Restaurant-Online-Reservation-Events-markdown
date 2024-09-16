<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'image' => 'required|max:2048|image|',
            'name' => 'required|min:5|max:2000',
            'type_id' => 'required',
            'price' => 'required',
            'description' => 'required|min:5|max:2000',
        ];
    }
}
