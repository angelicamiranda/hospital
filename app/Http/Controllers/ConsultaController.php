<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    //
    public function index($id)
    {
       $consultas = Consulta::all();
       $cita = Cita::findOrFail($id);
       //NotaUsuario::crear(Auth::user(),'Entro a ver los usuarios');
     //-> esta funcion  NotaController::store(Auth::user()->id,'Texto');
       return view('consulta.index', compact('consultas'), compact('cita'));
    }

    public function create($id) // abre un formulario de creacion
    {
        $cita = Cita::findOrFail($id);
        
        return view('consulta.create', compact('cita'));
    }
    public function store(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'peso' => ['required'],
            'estatura' => ['required'],
            'temperatura' => ['required'],
            'presion' => ['required'],
            'tipo' => ['required'],
            'idcita' => ['required'],
     
        ]);
        
       $consulta= Consulta::create([
            'peso'=>request('peso'),
            'estatura'=>request('estatura'),
            'temperatura'=>request('temperatura'),
            'presion'=>request('presion'),
            'tipo'=>request('tipo'),
            'idcita'=>request('idcita'),
        ]);
        
      
        $consulta->save();
        $id = $consulta->idcita;
       
        return redirect()->route('consulta.index', compact('id'));
    }

    public function destroy( Consulta $id)
    {
         $id->delete();
         return back()->with('success', 'Usuario Eliminado Correctamente');
    }


    public function edit($id)
    {
        $pacientes = Consulta::where('tipo','paciente')->get();
        $especialistas =Consulta::all();
        $cita = Cita::findOrFail($id);
        return view('consulta.edit');
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
