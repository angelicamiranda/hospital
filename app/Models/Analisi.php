<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisi extends Model
{
    use HasFactory;
    protected $fillable =[

        'fecha',
        'tipo',
        'idconsulta',
        'imagen',
        
    ];
    public function analisi(){
        return $this->belongsTo(Consulta::class,'idconsulta');
    }
    public function analisir(){
        return $this->hasMany(Resultado::class,'idanalisis');
    }
}
