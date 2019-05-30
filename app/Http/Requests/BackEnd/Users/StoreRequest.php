<?php

namespace App\Http\Requests\BackEnd\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'email' =>['required','string', 'email', 'max:255', 'unique:users'],
           'password' =>['required','string', 'min:8'],
           'name' => ['required','string'],
            'image' => ['required'],
        ];
    }
}
