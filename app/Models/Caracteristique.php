<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caracteristique extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="caracteristique";
    protected $primaryKey="ID_carac";
    protected $fillable=[
        'ID_carac',
        'Type',
        'Libelle',
        'Echeance',
        'Nbre_jour',
        'Date',
        'Valeur',
        'ValeurBool',
        'Id_article'
        
    ];

    protected $hidden = [

    ];
    public function articles(){
        return $this->belongsTo(Article::class, 'Id_article','ID_carac');
    }

}
