<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="site";
    protected $primaryKey="ID_site";
    protected $fillable=[
        'ID_site',
        'Nom_Site',
        'Nature',
        'Localisation_geographique',
        'Addresse_postale',
        'Contact',
        'Code_postal',
        'Fax',
        'Commentaire',
        'Id_entite',
        'Code_automatique'
    ];

    protected $hidden = [

    ];
    //en cas de multi entite mais pas pris en compte dans le code actuel
   /* public function sites(){
        return $this->belongsTo(Entite::class);
    }*/
    public function etages(){
        return $this->hasMany(Etage::class, 'Id_site','ID_site');
    }
    public function appartements()
    {
        return $this->hasManyThrough(Etage::class,Appartement::class);
    }

}
