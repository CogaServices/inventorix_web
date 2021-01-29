<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Bureau extends FormRequest
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
            'N_porte_bureau'=>['numeric', 'max:50'],
            'Nom_bureau'=>['string', 'max:50'],
            'Nb_occupant'=>['numeric', 'max:50'],
            'Commentaire'=>['string'],
            'Code_automatique'=>['string', 'max:50'],

        ];
    }
}
