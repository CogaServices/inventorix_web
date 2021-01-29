<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Devise extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="devise";
    protected $primaryKey="ID_devise";
    protected $fillable=[
        'ID_devise',
        'Nom_devise',
        'Taux_conversion',
        'Defaut',
    ];

    protected $hidden = [

    ];

    public function articles(){
        return $this->hasMany(Article::class, 'Id_article','Id_devise');
    }
}
