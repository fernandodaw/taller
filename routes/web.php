<?php
use App\Cliente;


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
    return view('welcome');
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
Route::get("/borrar", "MiControlador@sedtroy");
*/
/*Esta linea sustituye a todas las necesarias para la creacion del CRUD de clientes*/
Route::resource('/clientes','MiControlador');




Route::get("/vehiculos", function(){
    $vehiculos = Cliente::find(1)->vehiculos;
    foreach ($vehiculos as $vehiculo){
        echo $vehiculo->Marca . "<br/>";

    }
});