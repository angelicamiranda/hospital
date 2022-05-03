<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable =[

        'peso',
        'estatura',
        'temperatura',
        'presion',
        'tipo',
        'idcita',
    ];

    public function cita(){
        return $this->belongsTo(Cita::class,'idcita');
    }

    public function analisi(){
        return $this->hasMany(Analisi::class,'idconsulta');
    }
    public function receta(){
        return $this->hasMany(Receta::class,'idconsulta');
    }

}
