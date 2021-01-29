<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sous_famille extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="sous_famille";
    protected $primaryKey="ID_ssfam";
    protected $fillable=[
        'ID_ssfam',
        'Nom_sous_famille',
        'Id_famille',
    ];

    protected $hidden = [

    ];
    public function articles(){
        return $this->hasMany(Article::class, 'Id_sousfami');
    }
    public function familles(){
        return $this->belongsTo(Famille::class, 'Id_famille');
    }
}
