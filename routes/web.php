<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProveedorController;

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
//aqui hacemos referencia a la pantalla inicial que queremos mostrar al cargar el sistema
Route::get('/', function () {
    return view('auth.login');
});
//con esta linea de codigo pordemos hacer referencia a todos los metodos de la clase empleado
Route::resource('empleado', EmpleadoController::class);
Route::resource('administrador', AdministradorController::class);
Route::resource('proveedor', ProveedorController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('bodega', BodegaController::class);
Route::resource('factura', FacturaController::class);
Route::resource('asistencia', AsistenciaController::class);
Route::resource('inventario', InventarioController::class);


Auth::routes();

//con esta linea de codigo podemos hacer referencia al index del sistema
Route::get('/home',function(){
    return view('Index');
} )->name('home');


