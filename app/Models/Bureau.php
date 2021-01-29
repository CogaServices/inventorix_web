<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bureau extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="bureaux";
    protected $primaryKey="ID_bur";
    protected $fillable=[
        'ID_bur',
        'N_porte_bureau',
        'Nom_bureau',
        'Nb_occupant',
        'Commentaire',
        'Code_automatique',
        'Id_direction',
    ];
    public function directions()
    {
        return $this->belongsTo(Direction::class, 'Id_direction', 'ID_bur');
    }
    public function pieces(){
        return $this->hasMany(Piece::class, 'ID_bur', 'ID_bur');
    }
    public function articles(){
        return $this->hasManyThrough(Piece::class,Article::class);
    }

}
