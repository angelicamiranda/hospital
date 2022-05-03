<?php

use App\Http\Controllers\HistorialController;
use App\Models\Especialidad;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $especialidades = Especialidad::all();
    return view('index',compact('especialidades'));
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('users/doctor/index', [App\Http\Controllers\UserController::class, 'indexDoctor'])->name('users.doctor.index');
Route::get('users/doctor/create', [App\Http\Controllers\UserController::class, 'createDoctor'])->name('users.doctor.create');
Route::post('users/doctor/store', [App\Http\Controllers\UserController::class, 'storeDoctor'])->name('users.doctor.store');
Route::get('users/doctor/edit/{id}', [App\Http\Controllers\UserController::class, 'editDoctor'])->name('users.doctor.edit');
Route::post('users/doctor/update/{id}', [App\Http\Controllers\UserController::class, 'updateDoctor'])->name('users.doctor.update');
Route::post('users/doctor/{id}', [App\Http\Controllers\UserController::class, 'destroyDoctor'])->name('users.doctor.delete');

Route::get('users/paciente/index', [App\Http\Controllers\UserController::class, 'indexPaciente'])->name('users.paciente.index')->middleware('auth');
Route::get('users/paciente/create', [App\Http\Controllers\UserController::class, 'createPaciente'])->name('users.paciente.create')->middleware('auth');
Route::post('users/paciente/store', [App\Http\Controllers\UserController::class, 'storePaciente'])->name('users.paciente.store')->middleware('auth');
Route::get('users/paciente/edit/{id}', [App\Http\Controllers\UserController::class, 'editPaciente'])->name('users.paciente.edit')->middleware('auth');
Route::post('users/paciente/update/{id}', [App\Http\Controllers\UserController::class, 'updatePaciente'])->name('users.paciente.update')->middleware('auth');
Route::post('users/paciente/{id}', [App\Http\Controllers\UserController::class, 'destroyPaciente'])->name('users.paciente.delete')->middleware('auth');



Route::get('especialidad/index', [App\Http\Controllers\EspecialidadController::class, 'index'])->name('especialidad.index')->middleware('auth');
Route::get('especialidad/create', [App\Http\Controllers\EspecialidadController::class, 'create'])->name('especialidad.create')->middleware('auth');
Route::post('especialidad/store', [App\Http\Controllers\EspecialidadController::class, 'store'])->name('especialidad.store')->middleware('auth');
Route::get('especialidad/edit/{id}', [App\Http\Controllers\EspecialidadController::class, 'edit'])->name('especialidad.edit')->middleware('auth');
Route::post('especialidad/update/{id}', [App\Http\Controllers\EspecialidadController::class, 'update'])->name('especialidad.update')->middleware('auth');
Route::post('especialidad/{id}', [App\Http\Controllers\EspecialidadController::class, 'destroy'])->name('especialidad.delete')->middleware('auth');

Route::get('especialista/index', [App\Http\Controllers\EspecialistaController::class, 'index'])->name('especialista.index')->middleware('auth');
Route::get('especialista/create', [App\Http\Controllers\EspecialistaController::class, 'create'])->name('especialista.create')->middleware('auth');
Route::post('especialista/store', [App\Http\Controllers\EspecialistaController::class, 'store'])->name('especialista.store')->middleware('auth');
Route::get('especialista/edit/{id}', [App\Http\Controllers\EspecialistaController::class, 'edit'])->name('especialista.edit')->middleware('auth');
Route::post('especialista/update/{id}', [App\Http\Controllers\EspecialistaController::class, 'update'])->name('especialista.update')->middleware('auth');
Route::post('especialista/{id}', [App\Http\Controllers\EspecialistaController::class, 'destroy'])->name('especialista.delete')->middleware('auth');

Route::get('cita/index', [App\Http\Controllers\CitaController::class, 'index'])->name('cita.index');
Route::get('cita/create', [App\Http\Controllers\CitaController::class, 'create'])->name('cita.create');
Route::post('cita/store', [App\Http\Controllers\CitaController::class, 'store'])->name('cita.store');
Route::get('cita/edit/{id}', [App\Http\Controllers\CitaController::class, 'edit'])->name('cita.edit');
Route::post('cita/update/{id}', [App\Http\Controllers\CitaController::class, 'update'])->name('cita.update');
Route::post('cita/{id}', [App\Http\Controllers\EspecialistaController::class, 'destroy'])->name('cita.delete')->middleware('auth');


Route::get('consulta/index/{id}', [App\Http\Controllers\ConsultaController::class, 'index'])->name('consulta.index');
Route::get('consulta/create/{id}', [App\Http\Controllers\ConsultaController::class, 'create'])->name('consulta.create');
Route::post('consulta/store', [App\Http\Controllers\ConsultaController::class, 'store'])->name('consulta.store');
Route::get('consulta/edit/{id}', [App\Http\Controllers\ConsultaController::class, 'edit'])->name('consulta.edit');
Route::post('consulta/update/{id}', [App\Http\Controllers\CitaController::class, 'update'])->name('consulta.update');
Route::post('consulta/{id}', [App\Http\Controllers\ConsultaController::class, 'destroy'])->name('consulta.delete')->middleware('auth');

Route::get('analisi/index/{id}', [App\Http\Controllers\AnálisisController::class, 'index'])->name('analisi.index');
Route::get('analisi/create/{id}', [App\Http\Controllers\AnálisisController::class, 'create'])->name('analisi.create');
Route::post('analisi/store', [App\Http\Controllers\AnálisisController::class, 'store'])->name('analisi.store');
Route::get('analisi/edit/{id}', [App\Http\Controllers\AnálisisController::class, 'edit'])->name('consulta.edit');
Route::post('analisi/update/{id}', [App\Http\Controllers\AnálisisController::class, 'update'])->name('consulta.update');
Route::post('analisi/{id}', [App\Http\Controllers\AnálisisController::class, 'destroy'])->name('consulta.delete')->middleware('auth');


Route::get('receta/index/{id}', [App\Http\Controllers\RecetaController::class, 'index'])->name('receta.index');
Route::get('receta/create/{id}', [App\Http\Controllers\RecetaController::class, 'create'])->name('receta.create');
Route::post('receta/store', [App\Http\Controllers\RecetaController::class, 'store'])->name('receta.store');
Route::get('receta/edit/{id}', [App\Http\Controllers\RecetaController::class, 'edit'])->name('receta.edit');
Route::post('receta/update/{id}', [App\Http\Controllers\RecetaController::class, 'update'])->name('receta.update');
Route::post('receta/{id}', [App\Http\Controllers\RecetaController::class, 'destroy'])->name(' receta.delete')->middleware('auth');

Route::get('resultado/index', [App\Http\Controllers\ResultadoController::class, 'index'])->name('resultado.index');
Route::get('resultado/create/{id}', [App\Http\Controllers\ResultadoController::class, 'create'])->name('resultado.create');
Route::post('resultado/store', [App\Http\Controllers\ResultadoController::class, 'store'])->name('resultado.store');
Route::get('resultado/edit/{id}', [App\Http\Controllers\ResultadoController::class, 'edit'])->name('resultado.edit');
Route::post('resultado/update/{id}', [App\Http\Controllers\ResultadoController::class, 'update'])->name('resultado.update');
Route::post('resultado/{id}', [App\Http\Controllers\ResultadoController::class, 'destroy'])->name('resultado.delete')->middleware('auth');

Route::get('historial/pdfhistorial/{id}',[HistorialController::class,'historial'])->name('historial.pdfhistorial');