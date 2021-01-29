<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventaire extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="inventaire";
    protected $primaryKey="ID_Inventaire";
    protected $fillable=[
        'ID_Inventaire',
        'Quantite_Inv',
        'Date',
        'Id_article',
    ];

    protected $hidden = [

    ];
    public function articles(){
        return $this->belongsTo(Article::class, 'Id_article');
    }
}
