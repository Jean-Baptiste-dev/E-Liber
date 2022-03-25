<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesseurRequest extends FormRequest
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
            'name' => 'bail|string|between:1,50',
            'firstname' => 'bail|required|string|between:1,50',
            'tel' => 'bail|required|string|between:1,14',
            'adress' => 'bail|required|string',
            'ville' => 'bail|required|string',
            'mail' => 'bail|required|string',
            'salaire' => 'bail|required|string',
            'photo' => 'bail|required|string',
           
        ];
    }
}
