<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Document extends FormRequest
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
            'Nom_doc'=>['required', 'string', 'max:50'],
            'Chemin_doc'=>['required', 'string', 'max:200'],
            'Datedoc'=>['date', 'date_format:dd/mm/YYYY'],
        ];
    }
}
