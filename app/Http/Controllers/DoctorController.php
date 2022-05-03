<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller
{
    public function store(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'name' => ['required'],
            'celular' => ['required'],
            'imagen'=> ['required'],
            'orden'=> ['required'],
            'estado'=> ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'imagen' => 'image|max:2048',

        ]);
        $imagen = $request->file('imagen');
         
        $nombre = time(). '_' . $imagen->getClientOriginalName();
        $destino = public_path().'/imagenes';
        $imagen->move($destino, $nombre);

       $user= User::create([
            'name'=>request('name'),
            'celular'=>request('celular'),
            'imagen'=>request('imagen'),
            'orden'=>request('orden'),
            'estado'=>request('estado'),
            'email'=>request('email'),
            'password'=> bcrypt(request('password')),
            
        ]);
        $user->imagen = $nombre;
        $user->save();
       
        return redirect()->route('cliente.index');
    }
}
