<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fournisseur extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="fournisseur";
    protected $primaryKey="ID_fourn";
    protected $fillable=[
        'ID_fourn',
        'Nom_Fournisseur',
        'Adresse_Fournisseur',
        'Telephone_Fournisseur',
        'Localite_Fournisseur',
        'Email_Fournisseur'
    ];

    //en cas de multi entite mais pas pris en compte dans le code actuel
   /* public function sites(){
        return $this->belongsTo(Entite::class);
    }*/
    public function article(){
        return $this->hasMany(Article::class, 'Id_four','ID_fourn');
    }

}
