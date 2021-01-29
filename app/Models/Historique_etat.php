<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
class Historique_etat extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="historique_etat";
    protected $primaryKey="ID_Hist_etat";
    protected $fillable=[
        'ID_Hist_etat',
        'Libelle',
        'Date',
        'Id_article',
    ];

    protected $hidden = [

    ];
    public function article(){
        return $this->belongsTo(Article::class, 'Id_article');
    }
}

