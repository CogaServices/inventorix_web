<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Piece extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="piece";
    protected $primaryKey="ID_piece";
    protected $fillable=[
        'ID_piece',
        'Code_barre',
        'Nom_piece',
        'Nom_direction',
        'Nom_bureau',
        'suface',
        'Nbre_fenetre',
        'Observation',
        'Numero_porte',
        'ID_bur',
        'ID_etage',
    ];
    public function bureaux()
    {
        return $this->belongsTo(Bureau:: class, 'ID_bur', 'ID_piece');
    }
    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function documents(){
        return $this->hasMany(Document::class);
    }
    public function etages()
    {
        return $this->belongsTo(Etage::class);
    }
}
