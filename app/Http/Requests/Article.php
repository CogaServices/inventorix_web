<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Article extends FormRequest
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
                        'Code_barre'=>[ 'required','string', 'max:50'],
                        'Nom_article'=>['required', 'string', 'max:50'],
                        'Prix_dachat'=>[ 'numeric'],
                        'Date_achat'=>['date', 'date_format:dd/mm/YYYY'],
                        'Date_mise_service'=>['date', 'date_format:dd/mm/YYYY'],
                        'N_inventaire'=>[  'numeric'],
                        'N_série'=>[  'numeric'],
                        'Numero_Lot'=>[ 'numeric'],
                        'Quantité'=>[  'numeric'],
                        'Valeur_Residuelle'=>[  'numeric'],
                        'Taux_Amortissement'=>[ 'numeric'],
                        'Modèle'=>[ 'string', 'max:50'],
                        'Imput_Compta'=>[ 'string', 'max:50'],
                        'Lieu_precis'=>[ 'string', 'max:50'],
                        'Observation'=>[ 'string', 'max:50'],
                        'Nb_annee_Amort'=>[ 'numeric'],
                        'Nb_annee_Garant'=>[  'numeric'],
                        'Date_fin_Amort'=>['date', 'date_format:dd/mm/YYYY'],
                        'Date_fin_Garant'=>['date', 'date_format:dd/mm/YYYY'],
                        'Etiquette'=>[ 'string', 'max:50'],
                        'Sortie_Inv'=>[ 'string', 'max:50'],
                        'Composant'=>[ 'string', 'max:50'],
                        'Mise_Au_Rebut'=>[ 'string', 'max:50'],
                        'Destruction'=>[ 'string', 'max:50'],
                        'Vente'=>[ 'string', 'max:50'],
                        'Echange'=>[ 'string', 'max:50'],
                        'Contrat_Destr'=>[ 'string', 'max:50'],
                        'Bien_Concession'=>[ 'string', 'max:50'],
                        'Subvention_Invest'=>[ 'string', 'max:50'],
        ];
    }
}
