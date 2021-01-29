<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Entite extends FormRequest
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

            'Raison_sociale'=>['required','string', 'max:50'],
            'Code_postal'=>['numeric'],
            'Type_particulier'=>['max:50'],
            'Nb_site'=>['numeric'],
            'Nom_responsable_projet'=>['string', 'max:50'],
            'forme_de_societe'=>['string', 'max:50'],
            'Objet_social'=>['string', 'max:50'],
            'RCCM'=>['string', 'max:50'],
            'NCC'=>['string', 'max:50'],
            'Nom_du_groupe'=>['string', 'max:50'],
            'Contact_organisation'=>['string', 'max:15'],
            'Contact_responsable_projet'=>['string', 'max:15'],
            'Numero_Ordre'=>['numeric', 'max:50'],
            'Adresse_Siege_Social'=>['string', 'max:50' ],
            'NIdentification_fiscale'=>[ 'required','string', 'max:50' ],
            'Sigle'=>['max:50'],
        ];
    }
}
