<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etage extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="etage";
    protected $primaryKey="ID_etage";
    protected $fillable=[
        'ID_etage',
        'Nom_etage',
        'Id_site',
    ];
    public function site()
    {
        return $this->belongsTo(Site::class, 'Id_site');
    }
    public function appartements(){
        return $this->hasMany(Appartement::class, 'ID_app', 'ID_etage');
    }
    public function directions(){
        return $this->hasManyThrough(Appartement::class,Direction::class);
    }
    public function pieces(){
        return $this->hasMany(Pieces::class);
    }
}
