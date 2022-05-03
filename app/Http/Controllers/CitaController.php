<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Especialista;

class CitaController extends Controller
{
    //
    public function index()
    {
       $citas = Cita::all();
       //NotaUsuario::crear(Auth::user(),'Entro a ver los usuarios');
     //-> esta funcion  NotaController::store(Auth::user()->id,'Texto');
       return view('cita.index', compact('citas'));
    }

    public function create() // abre un formulario de creacion
    {
        $pacientes = User::where('tipo','paciente')->get();
        $especialistas =Especialista::all();
        return view('cita.create', compact('pacientes'), compact('especialistas'));
    }
    public function store(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'idpaciente' => ['required'],
            'idespecialista' => ['required'],
            'fecha' => ['required'],
           

        ]);
        
       $cita= Cita::create([
            'idpaciente'=>request('idpaciente'),
            'idespecialista'=>request('idespecialista'),
            'fecha'=>request('fecha'),
        ]);
        
        $cita->save();
       
        return redirect()->route('cita.index');
    }

    public function destroy( Especialista $id)
    {
         $id->delete();
         return back()->with('success', 'Usuario Eliminado Correctamente');
    }


    public function edit($id)
    {
        $pacientes = User::where('tipo','paciente')->get();
        $especialistas =Especialista::all();
        $cita = Cita::findOrFail($id);
        return view('cita.edit',['pacientes' => $pacientes, 'cita' => $cita, 'especialistas' => $especialistas]);
    }

    public function update(Request $request, $id)
    {
      
     

        $especialista=Cita::findOrFail($id);
        $datos=$request->only('idpaciente','idespecialista', 'fecha');
        $especialista->update($datos);
        $especialista->save();
       
        return redirect()->route('cita.index');

    }
}
