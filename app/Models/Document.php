<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="document";
    protected $primaryKey="ID_doc";
    protected $fillable=[
        'ID_doc',
        'Nom_doc',
        'Chemin_doc',
        'Datedoc',
        'Id_contrat',
        'Id_site',
        'Id_piece',
        'Id_article',
    ];

    protected $hidden = [

    ];
/*
    public function articles(){
        return $this->hasMany(Article::class, 'Id_article','ID_doc');
    }*/
}
