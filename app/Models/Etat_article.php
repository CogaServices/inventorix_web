<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etat_article extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="etat";
    protected $primaryKey="ID_etat";
    protected $fillable=[
        'ID_etat',
        'Type',
        'Sortie_inventaire',
    ];

    protected $hidden = [

    ];
    //en cas de multi entite mais pas pris en compte dans le code actuel
   /* public function sites(){
        return $this->belongsTo(Entite::class);
    }*/
    public function articles(){
        return $this->hasMany(Article::class);
    }

}
