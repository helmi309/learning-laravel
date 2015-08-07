<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CobaRequest extends Request
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
            'nama' => 'required|max:255|min:10',
            'site' => 'url',
            'phone' => 'required|numeric',
            'message' => 'max:1024|min:10',
            'email' => 'required|email',
        ];
    }
}
