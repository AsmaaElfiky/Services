<?php

namespace App\Http\Requests\BackEnd\Hotels;

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
            'type' => ['required','string','max:191'],
            'plural' => ['required','digits_between:1,9'],
            'singular' => ['required','digits_between:1,9'],
            'trip_id' => ['required'],

        ];
    }
}
