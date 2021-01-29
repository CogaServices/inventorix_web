<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marque extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="marque";
    protected $primaryKey="ID_marque";
    protected $fillable=[
        'ID_marque',
        'Nom_marque',
        ];


    //en cas de multi entite mais pas pris en compte dans le code actuel
    /* public function sites(){
        return $this->belongsTo(Entite::class);
    }*/

    public function articles(){
        return $this->hasMany(Article::class, 'Id_marq','ID_marque');
    }

}
