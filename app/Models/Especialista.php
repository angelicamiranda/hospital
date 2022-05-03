<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
 
    protected $fillable =[
        'iddoctor',
        'idespecialidad',
    ];
    use HasFactory;

    public function doctor(){
        return $this->belongsTo(User::class,'iddoctor');
    }
    public function especialidad(){
        return $this->belongsTo(Especialidad::class,'idespecialidad');
    }
    public function especialista(){
        return $this->hasMany(Cita::class,'idespecialista');
    }
}
