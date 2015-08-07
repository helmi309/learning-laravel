<?php

namespace App\Http\Requests;

class GuestRueqest extends Request
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
            'name' => 'required|max:35|min:3',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'sites' => 'url',
            'message' => 'required|max:1024|min:10',
        ];
    }
}
