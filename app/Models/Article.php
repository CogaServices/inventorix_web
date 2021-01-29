<?php

namespace App\Models;

use App\Http\Controllers\Etat_articleController;
use App\Http\Requests\Sous_Famille;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="article";
    protected $primaryKey="ID_article";
    protected $fillable=[
                        'ID_article',
                        'Code_barre',
                        'Nom_article',
                        'Prix_dachat',
                        'Date_achat',
                        'Date_mise_service',
                        'N_inventaire',
                        'N_série',
                        'Numero_Lot',
                        'Quantité',
                        'Valeur_Residuelle',
                        'Taux_Amortissement',
                        'Modèle',
                        'Imput_Compta',
                        'Lieu_precis',
                        'Observation',
                        'Nb_annee_Amort',
                        'Nb_annee_Garant',
                        'Date_fin_Amort',
                        'Date_fin_Garant',
                        'Etiquette',
                        'Sortie_Inv',
                        'Composant',
                        'Id_compo_art',
                        'Mise_Au_Rebut',
                        'Destruction',
                        'Vente',
                        'Echange',
                        'Contrat_Destr',
                        'Bien_Concession',
                        'Subvention_Invest',
                        'Id_four',
                        'Id_etat',
                        'Id_marq',
                        'Id_piece',
                        'Id_sousfami',
                        'Id_devise'
    ];

    protected $hidden = [

    ];
    //en cas de multi entite mais pas pris en compte dans le code actuel
   public function fournisseurs(){
        return $this->belongsTo(Fournisseur::class, 'Id_four');
    }
    public function etats(){
        return $this->belongsTo(Etat_article::class, 'Id_etat');
    }
    public function marques(){
        return $this->belongsTo(Marque::class, 'Id_marq');
    }
    public function pieces(){
        return $this->belongsTo(Piece::class, 'Id_piece');
    }
    public function sous_familles(){
        return $this->belongsTo(Sous_Famille::class, 'Id_sousfami');
    }
    public function devise(){
        return $this->belongsTo(Devise::class, 'Id_devise');
    }
    public function composants(){
        return $this->belongsTo(Composant::class, 'Id_compo_art');
    }

}
