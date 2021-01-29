<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Direction extends FormRequest
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
            'Nom_de_la_direction'=>['required','string', 'max:50'],
            'Code_direction'=>['required','string', 'max:50'],
            'Contact'=>['numeric'],
            'Nom_du_directeur'=>['string', 'max:50'],
            'Description_activité'=>['string', 'max:50'],
            'Commentaire'=>['string'],
            'Code_automatique'=>['string', 'max:50'],
        ];
    }
}
