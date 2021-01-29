<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Direction extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="direction";
    protected $primaryKey="ID_dir";
    protected $fillable=[
        'ID_dir',
        'Nom_de_la_direction',
        'Code_direction',
        'Contact',
        'Nom_du_directeur',
        'Description_activité',
        'Commentaire',
        'Code_automatique',
        'Id_app',
    ];

    public function appartements()
    {
        return $this->belongsTo(Appartement::class);
    }
    public function bureaux(){
        return $this->hasMany(Bureau::class, 'Id_direction', 'ID_dir');
    }
    public function pieces(){
        return $this->hasManyThrough(Bureau::class,Piece::class);
    }
}
