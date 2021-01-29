<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class site extends FormRequest
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
                'Nom_Site'=>['required','string', 'max:50'],
                'Nature'=>['string', 'max:50'] ,
                'Localisation_geographique'=>['string', 'max:50'],
                'Addresse_postale'=>['string', 'max:50'],
                'Contact'=>['numeric','string',],
                'Code_postal'=>['numeric','string' ],
                'Fax'=>['string', 'max:50'],
                'Commentaire'=>['string'],

        ];
    }
}
