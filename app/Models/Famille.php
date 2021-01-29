<?php

namespace App\Models;

use App\Http\Requests\Sous_Famille;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Famille extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="famille";
    protected $primaryKey="ID_fam";
    protected $fillable=[
        'ID_fam',
        'Nom_famille',
    ];
    //en cas de multi entite mais pas pris en compte dans le code actuel
   /* public function sites(){
        return $this->belongsTo(Entite::class);
    }*/
    public function sous_familles(){
        return $this->hasMany(Sous_famille::class, 'Id_famille','ID_fam');
    }
    public function articles()
    {
        return $this->hasManyThrough(Sous_famille::class, Article::class);
    }
}
