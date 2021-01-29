<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Fournisseur extends FormRequest
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
            'Nom_Fournisseur'=>['required', 'string', 'max:50'],
            'Adresse_Fournisseur'=>[ 'string', 'max:100'],
            'Telephone_Fournisseur'=>[ 'string', 'max:100'],
            'Localite_Fournisseur'=>[ 'string', 'max:100'],
            'Email_Fournisseur'=>[ 'string', 'max:50'],
        ];
    }
}
