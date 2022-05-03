<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index($id)
    {
        $consulta = Consulta::findOrFail($id);
       $recetas = Receta::all();
       //NotaUsuario::crear(Auth::user(),'Entro a ver los usuarios');
     //-> esta funcion  NotaController::store(Auth::user()->id,'Texto');
       return view('receta.index', compact('recetas'), compact('consulta'));
    } 
    public function create($id) // abre un formulario de creacion
    {
        $consulta = Consulta::findOrFail($id);
        
        return view('receta.create', compact('consulta'));
    }
    public function store(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'medicamento' => ['required'],
            'dosis' => ['required'],
            'observaciones' => ['required'],
            'idconsulta' => ['required'],
            'imagen' => 'image|max:2048', 
     
     
        ]);
        $imagen = $request->file('imagen');
         
        $nombre = time(). '_' . $imagen->getClientOriginalName();
        $destino = public_path().'/imagenes';
        $imagen->move($destino, $nombre);
       $receta= Receta::create([
            'medicamento'=>request('medicamento'),
            'dosis'=>request('dosis'),
            'observaciones'=>request('observaciones'),
            'idconsulta'=>request('idconsulta'),
        
        ]);
        
        $receta->imagen = $nombre;
        $receta->save();
        $id = $receta->idconsulta;
       
        return redirect()->route('receta.index', compact('id'));
    }


}
