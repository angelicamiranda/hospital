<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;
    protected $fillable =[

        
        'descripcion',
        'idanalisis',
        'imagen',
        
    ];
    public function analisir(){
        return $this->belongsTo(Analisi::class,'idanalisis');
    }
}
