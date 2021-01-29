<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appartement extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="appartement";
    protected $primaryKey="ID_app";
    protected $fillable=[
        'ID_app',
        'Nom_appartement',
        'Id_etage',
    ];
    public function etage()
    {
        return $this->belongsTo(Etage::class, 'Id_etage');
    }
    public function directions(){
        return $this->hasMany(Direction::class, 'ID_dir','ID_app');
    }
    public function bureaux(){
        return $this->hasManyThrough(Direction::class,Bureau::class , '');
    }
}
