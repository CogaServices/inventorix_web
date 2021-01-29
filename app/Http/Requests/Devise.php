<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Devise extends FormRequest
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
            'Nom_devise'=>['required','string','max:50'],
            'Taux_conversion'=>['numeric'],
            'Defaut'=>['string','max:50'],
        ];
    }
}
