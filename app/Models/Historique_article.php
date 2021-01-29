<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Historique_article extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="historique";
    protected $primaryKey="ID_Historistique";
    protected $fillable=[
        'ID_Historistique',
        'Difference_quantite',
        'Date',
        'Libelle',
        'Observation',
        'Id_article',
    ];

    protected $hidden = [

    ];
    public function articles(){
        return $this->hasMany(Article::class);
    }
}
