<?php

namespace App\Http\Controllers;

use App\Models\Analisi;
use App\Models\Resultado;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    public function index()
    {
       $recetas = Resultado::all();
       //NotaUsuario::crear(Auth::user(),'Entro a ver los usuarios');
     //-> esta funcion  NotaController::store(Auth::user()->id,'Texto');
       return view('resultado.index', compact('recetas'));
    } 
    public function create($id) // abre un formulario de creacion
    {
        $analisi = Analisi::findOrFail($id);
        
        return view('resultado.create', compact('analisi'));
    }
    public function store(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'descripcion' => ['required'],
            'idanalisis' => ['required'],
            
            'imagen' => 'image|max:2048', 
     
     
        ]);
        $imagen = $request->file('imagen');
         
        $nombre = time(). '_' . $imagen->getClientOriginalName();
        $destino = public_path().'/imagenes';
        $imagen->move($destino, $nombre);
       $resultado= Resultado::create([
            'descripcion'=>request('descripcion'),
            'idanalisis'=>request('idanalisis'),
           
        
        ]);
        
        $resultado->imagen = $nombre;
        $resultado->save();
       
        return redirect()->route('users.paciente.index');
    }
}
