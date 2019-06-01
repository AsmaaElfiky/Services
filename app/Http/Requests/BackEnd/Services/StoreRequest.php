<?php

namespace App\Http\Requests\BackEnd\Services;

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
           'image'=>['required','image','mimes:jpeg','max:500','dimensions:ratio=1/1,max_width=400,max_height=400,min_width=400,min_height=400'],
            'order'=>['integer'],
            'name'=>['required'],


        ];
    }
}
