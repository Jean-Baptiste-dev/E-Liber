<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
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
            'filiere_name' => 'bail|string|between:1,50',
            'cour_name' => 'bail|string|between:1,50',
            'date_naissance' => 'bail|string|between:1,50',
            'sexe' => 'bail|required|string|between:1,15',
            'nationalite' => 'bail|required|string|between:1,30',
            'tel' => 'bail|required|string|between:1,14',
            'mail' => 'bail|required|string',
           
        ];
    }
}
