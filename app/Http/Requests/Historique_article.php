<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Historique_article extends FormRequest
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
            'Difference_quantite'=>['numeric'],
            'Date'=>['date', 'date_format:dd/mm/YYYY'],
            'Libelle'=>['require', 'string', 'max:50'],
            'Observation'=>['require', 'string'],
        ];
    }
}
