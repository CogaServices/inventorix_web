<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visite extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="visite";
    protected $primaryKey="ID_visite";
    protected $fillable=[
        'ID_visite',
        'Descriptif',
        'Dateffet',
        'Daterealisation',
        'Temps',
        'Dateprochaine',
        'Id_contrat',
        'Dateffet',
    ];

    protected $hidden = [

    ];
    public function contrat(){
        return $this->belongsTo(Contrat::class, 'Id_contrat');
    }
}
