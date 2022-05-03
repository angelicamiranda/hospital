<?php

namespace App\Http\Controllers;

use App\Models\Analisi;
use App\Models\Consulta;
use Illuminate\Http\Request;

class AnálisisController extends Controller
{
    public function index($id)
    {
       $analisis = Analisi::all();
       $consulta = Consulta::findOrFail($id);
       //NotaUsuario::crear(Auth::user(),'Entro a ver los usuarios');
     //-> esta funcion  NotaController::store(Auth::user()->id,'Texto');
       return view('analisi.index', compact('analisis','consulta'));
    } 
    public function create($id) // abre un formulario de creacion
    {
        $consulta = Consulta::findOrFail($id);
        
        return view('analisi.create', compact('consulta'));
    }
    public function store(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'fecha' => ['required'],
            'tipo' => ['required'],
            'idconsulta' => ['required'],
            'imagen' => 'image|max:2048', 
     
        ]);
        $imagen = $request->file('imagen');
         
        $nombre = time(). '_' . $imagen->getClientOriginalName();
        $destino = public_path().'/imagenes';
        $imagen->move($destino, $nombre);
       
       $analisis= Analisi::create([
            'fecha'=>request('fecha'),
            'tipo'=>request('tipo'),
            'idconsulta'=>request('idconsulta'),
        
        ]);
        
        $analisis->imagen = $nombre;
        $analisis->save();
        $id = $analisis->idconsulta;
       
        return redirect()->route('analisi.index', compact('id'));
    }


}
