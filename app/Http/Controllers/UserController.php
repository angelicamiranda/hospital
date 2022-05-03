<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
     
    public function indexDoctor()
    {
       $users = User::all();
       //NotaUsuario::crear(Auth::user(),'Entro a ver los usuarios');
     //-> esta funcion  NotaController::store(Auth::user()->id,'Texto');
       return view('users.doctor.index', compact('users'));
    }
    public function createDoctor() // abre un formulario de creacion
    {
        
        return view('users.doctor.create');
    }
    

    public function storeDoctor(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'name' => ['required'],
            'telefono' => ['required'],
            'foto'=> ['required'],
            'ci'=> ['required'],
            'tipo'=> ['required'],
            'email' => ['required'],
            'consultorio' => ['required'],
            'password' => ['required'],
            'foto' => 'image|max:2048',

        ]);
        $imagen = $request->file('foto');
         
        $nombre = time(). '_' . $imagen->getClientOriginalName();
        $destino = public_path().'/imagenes';
        $imagen->move($destino, $nombre);

       $user= User::create([
            'name'=>request('name'),
            'telefono'=>request('telefono'),
            'consultorio'=>request('consultorio'),
            'foto'=>request('foto'),
            'ci'=>request('ci'),
            'tipo'=>request('tipo'),
            'email'=>request('email'),
            'password'=> bcrypt(request('password')),
            
        ]);
        $user->foto = $nombre;
        $user->save();
       
        return redirect()->route('users.doctor.index');
    }
    public function destroyDoctor( User $id)
    {
         $id->delete();
         return back()->with('success', 'Usuario Eliminado Correctamente');
    }

    public function editDoctor($id)
    {
        $user = User::findOrFail($id);
        return view('users.doctor.edit',compact('user'));
    }

    public function updateDoctor(Request $request, $id)
    {
      
        $imagen = $request->file('foto');
         
        $nombre = time(). '_' . $imagen->getClientOriginalName();
        $destino = public_path().'/imagenes';
        $imagen->move($destino, $nombre);

        $user=User::findOrFail($id);
        $datos=$request->only('name','celular','tipo','consultorio','estado','email');
        $password=$request->input('password');
        if($password)
        $data['password'] = bcrypt($password);
  
        $user->update($datos);
        $user->foto = $nombre;
        $user->save();
       
        return redirect()->route('users.doctor.index');

    }

    public function show($id)
    {
        $user=User::findOrFail($id); 
        return view('users.doctor.edit', compact('user'));
    }


    // PACIENTES 
    public function indexPaciente()
    {
       $users = User::all();
       //NotaUsuario::crear(Auth::user(),'Entro a ver los usuarios');
     //-> esta funcion  NotaController::store(Auth::user()->id,'Texto');
       return view('users.paciente.index', compact('users'));
    }
    public function createPaciente() // abre un formulario de creacion
    {
        
        return view('users.paciente.create');
    }
    

    public function storePaciente(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'name' => ['required'],
            'telefono' => ['required'],
            'foto'=> ['required'],
            'ci'=> ['required'],
            'tipo'=> ['required'],
            'email' => ['required'],
            'fechanacimiento' => ['required'],
            'password' => ['required'],
            'foto' => 'image|max:2048',

        ]);
        $imagen = $request->file('foto');
         
        $nombre = time(). '_' . $imagen->getClientOriginalName();
        $destino = public_path().'/imagenes';
        $imagen->move($destino, $nombre);

       $user= User::create([
            'name'=>request('name'),
            'telefono'=>request('telefono'),
            'fechanacimiento'=>request('fechanacimiento'),
            'foto'=>request('foto'),
            'ci'=>request('ci'),
            'tipo'=>request('tipo'),
            'email'=>request('email'),
            'password'=> bcrypt(request('password')),
            
        ]);
        $user->foto = $nombre;
        $user->save();
       
        return redirect()->route('users.paciente.index');
    }

    public function updatePaciente(Request $request, $id)
    {
      
        $imagen = $request->file('foto');
         
        $nombre = time(). '_' . $imagen->getClientOriginalName();
        $destino = public_path().'/imagenes';
        $imagen->move($destino, $nombre);

        $user=User::findOrFail($id);
        $datos=$request->only('name','celular','tipo','consultorio','estado','email');
        $password=$request->input('password');
        if($password)
        $data['password'] = bcrypt($password);
  
        $user->update($datos);
        $user->foto = $nombre;
        $user->save();
       
        return redirect()->route('users.paciente.index');

    }
    public function editPaciente($id)
    {
        $user = User::findOrFail($id);
        return view('users.paciente.edit',compact('user'));
    }

    public function destroyPaciente( User $id)
    {
         $id->delete();
         return back()->with('success', 'Usuario Eliminado Correctamente');
    }
}
