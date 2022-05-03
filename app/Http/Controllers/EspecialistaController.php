<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Especialista;
use App\Models\User;
use Illuminate\Http\Request;

class EspecialistaController extends Controller
{
    public function index()
    {
       $especialistas = Especialista::all();
       //NotaUsuario::crear(Auth::user(),'Entro a ver los usuarios');
     //-> esta funcion  NotaController::store(Auth::user()->id,'Texto');
       return view('especialista.index', compact('especialistas'));
    }
    public function create() // abre un formulario de creacion
    {
     
        $doctores = User::where('tipo','doctor')->get();
        $especialidades =Especialidad::all();
        return view('especialista.create', compact('doctores'), compact('especialidades'));
    }
    

    public function store(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'iddoctor' => ['required'],
            'idespecialidad' => ['required'],
            

        ]);
     
       $especialista= Especialista::create([
            'iddoctor'=>request('iddoctor'),
            'idespecialidad'=>request('idespecialidad'),
            
        ]);
        
      
        $especialista->save();
       
        return redirect()->route('especialista.index');
    }

    public function destroy( Especialista $id)
    {
         $id->delete();
         return back()->with('success', 'Usuario Eliminado Correctamente');
    }


    public function edit($id)
    {
        $doctores = User::where('tipo','doctor')->get();
        $especialidades =Especialidad::all();
        $especialista = Especialista::findOrFail($id);
        return view('especialista.edit',['especialista' => $especialista, 'doctores' => $doctores, 'especialidades' => $especialidades]);
    }

    public function update(Request $request, $id)
    {
      
     

        $especialista=Especialista::findOrFail($id);
        $datos=$request->only('iddoctor','idespecialidad');
        $especialista->update($datos);
        $especialista->save();
       
        return redirect()->route('especialista.index');

    }
}
