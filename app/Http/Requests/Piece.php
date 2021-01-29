<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Piece extends FormRequest
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
        'Code_barre'=>['required', 'string', 'max:250'],
        'Nom_piece'=>['required', 'string', 'max:50'],
        'Nom_direction'=>[ 'string', 'max:50'],
        'Nom_bureau'=>[ 'string', 'max:50'],
        'suface'=>[ 'numeric'],
        'Nbre_fenetre'=>['numeric'],
        'Observation'=>['string'],
        'Numero_porte'=>['numeric'],
        ];
    }
}
