<?php
use App\Cliente;
use App\Reparacion;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('principal');
});
Route::get('/taller', function () {
    return view('layouts.internaTaller');
});
/*
Route::get('/h', function () {
    return "hola";
});
*/
/*
Route::get("/", "MiControlador@index");
Route::get("/crear", "MiControlador@create");
Route::get("/actualizar", "MiControlador@update");
Route::get("/insertar", "MiControlador@store");
Route::get("/borrar", "MiControlador@destroy");
*/
/*Esta linea sustituye a todas las necesarias para la creacion del CRUD de clientes*/

Route::resource('/clientes','MiControlador');

/*redirecciona para el  CRUD de reparaciones*/
Route::resource('/reparaciones','ControllerReparacion');

/*redirecciona para el  CRUD de vehiculos*/
Route::resource('/vehiculos','ControllerVehiculo');

Route::get("/vehiculo", function(){
    $vehiculos = Cliente::find(1)->vehiculos;
    foreach ($vehiculos as $vehiculo){
        echo $vehiculo->Marca . "<br/>";

    }
});