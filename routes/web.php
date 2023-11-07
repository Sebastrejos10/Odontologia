<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PacienteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('empleado',EmpleadoController::class)->middleware('auth');

Auth::routes(['register'=>true,'reset'=>true ]);

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function () {

Route::get('/', [EmpleadoController::class, 'index'])->name('home');

Route::get('/empleado/delete/{id}', 'App\Http\Controllers\EmpleadoController@destroy');

Route::get('/informacion-pacientes', [PacienteController::class, 'mostrarInformacionPacientes']);

Route::get('/crear_paciente', 'PacienteController@crearPaciente')->name('crear_paciente');

Route::get('/consultar_paciente', 'PacienteController@consultarPaciente')->name('consultar_paciente');

Route::get('/descargar_pdf/{id}', 'PacienteController@descargarPDF')->name('descargar_pdf');


});