<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contrat extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="contrat";
    protected $primaryKey="ID_contrat";
    protected $fillable=[
        'ID_contrat',
        'Type',
        'Datedebut',
        'Datefin',
        'Cout',
        'Observation',
        'Datefin',
    ];

    protected $hidden = [

    ];

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
