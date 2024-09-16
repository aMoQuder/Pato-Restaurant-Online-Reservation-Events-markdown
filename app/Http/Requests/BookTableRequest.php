<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookTableRequest extends FormRequest
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
            "name"=>"required|min:5",
            "phone"=>"required|min:5|numeric",
            "Num_peaple"=>"required",
            "email"=>"required|email",
            "date"=>"required",
            "time"=>"required",
        ];
    }
}
