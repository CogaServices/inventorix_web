<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Sous_Famille extends FormRequest
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
            'Nom_sous_famille'=>['required', 'string', 'max:50'],
        ];
    }
}
