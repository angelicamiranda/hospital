<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    //

    public function index()
    {
       $especialidades = Especialidad::all();
       //NotaUsuario::crear(Auth::user(),'Entro a ver los usuarios');
     //-> esta funcion  NotaController::store(Auth::user()->id,'Texto');
       return view('especialidad.index', compact('especialidades'));
    }
    public function create() // abre un formulario de creacion
    {
        
        return view('especialidad.create');
    }
    

    public function store(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'imagen' => 'image|max:2048',

        ]);
        $imagen = $request->file('imagen');
         
        $nombre = time(). '_' . $imagen->getClientOriginalName();
        $destino = public_path().'/imagenes';
        $imagen->move($destino, $nombre);

       $especialidad= Especialidad::create([
            'nombre'=>request('nombre'),
            'descripcion'=>request('descripcion'),
            
        ]);
        
        $especialidad->imagen = $nombre;
        $especialidad->save();
       
        return redirect()->route('especialidad.index');
    }

    public function destroy( Especialidad $id)
    {
         $id->delete();
         return back()->with('success', 'Usuario Eliminado Correctamente');
    }


    public function edit($id)
    {
        $especialidad = Especialidad::findOrFail($id);
        return view('especialidad.edit',compact('especialidad'));
    }

    public function update(Request $request, $id)
    {
      
        $imagen = $request->file('imagen');
         
        $nombre = time(). '_' . $imagen->getClientOriginalName();
        $destino = public_path().'/imagenes';
        $imagen->move($destino, $nombre);

        $especialidad=Especialidad::findOrFail($id);
        $datos=$request->only('nombre','descripcion');
      
        $especialidad->update($datos);
        $especialidad->imagen = $nombre;
        $especialidad->save();
       
        return redirect()->route('especialidad.index');

    }
}
