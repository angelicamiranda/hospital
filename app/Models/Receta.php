<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    protected $fillable =[

        'medicamento',
        'dosis',
        'observaciones',
        'idconsulta',
        'imagen',
        
    ];
    public function receta(){
        return $this->belongsTo(Consulta::class,'idconsulta');
    }
}
