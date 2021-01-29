<?php

namespace App\Models;

use App\Http\Controllers\CaracteristiqueController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Valeur_caracteristique extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="valeur_caracteristique";
    protected $primaryKey="ID_Valeur";
    protected $fillable=[
        'ID_Valeur',
        'Libelle',
        'Id_caraq',
    ];

    protected $hidden = [

    ];
    public function carateristique(){
        return $this->belongsTo(Caracteristique::class, 'Id_caraq');
    }

}
