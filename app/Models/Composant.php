<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Composant extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="composant";
    protected $primaryKey="ID_Composant";
    protected $fillable=[
        'ID_Composant',
        'Libelle',
        'Nature',
        'Id_article',
    ];

    protected $hidden = [

    ];

    public function articles(){
        return $this->belongsTo(Article::class, 'Id_article','ID_Composant');
    }
}
