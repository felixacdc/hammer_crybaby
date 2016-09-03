<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class editLocalRequest extends Request
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
            'name'          =>    'required',
            'description'   =>    'required',
            'phone'         =>    'required|min:8',
            'products'      =>    'required',
            'image'         =>    'required|image|mimes:jpeg,png,jpg,JPGE,PNG,JPG',
        ];
    }
}