<?php

namespace App\Http\Requests\BackEnd\Trips;

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
            'name' => ['required','string','max:191'],
            'desc' => ['required','string','max:191'],
            'date' => ['required'],
            'cat_id' => ['required'],

        ];
    }
}
