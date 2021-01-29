<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entite extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="entite";
    protected $primaryKey="ID_entite";
    protected $fillable=[
        'ID_entite',
        'Raison_sociale',
        'Code_postal',
        'Type_particulier',
        'Nb_site',
        'Nom_responsable_projet',
        'forme_de_societe',
        'Objet_social',
        'RCCM',
        'NCC',
        'Nom_du_groupe',
        'Contact_organisation',
        'Contact_responsable_projet',
        'Code_automatique',
        'Numero_Ordre',
        'Adresse_Siege_Social',
        'NIdentification_fiscale',
        'Sigle',
    ];

   // champs a cacher
    protected $hidden = [

    ];

}
