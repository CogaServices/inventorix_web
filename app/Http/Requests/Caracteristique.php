<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Caracteristique extends FormRequest
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
           'Type'=>['string', 'max:50'],
           'Libellé'=>['string', 'max:50'],
           'Echeance'=>['date', 'max:50'],
           'Nbre_jour'=>['numeric'],
           'Date'=>['date'],
           'Valeur'=>['numeric', 'max:50'],
           'ValeurBool'=>['string', 'max:50'],
        ];
    }
}
