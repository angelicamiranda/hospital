<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable =[

        'idespecialista',
        'idpaciente',
        'fecha',
    ];
    use HasFactory;

    
    public function paciente(){
        return $this->belongsTo(User::class,'idpaciente');
    }
    public function especialista(){
        return $this->belongsTo(Especialista::class,'idespecialista');
    }

    public function cita(){
        return $this->hasMany(Consulta::class,'idcita');
    }
}


