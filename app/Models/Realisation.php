<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Realisation extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table="realisation";
    protected $primaryKey="ID_reali";
    protected $fillable=[
        'ID_reali',
        'Observation',
        'Datereal',
        'Id_vis',
    ];

    protected $hidden = [

    ];
    public function visites(){
        return $this->belongsTo(Visite::class);
    }
}
