<?php
use App\Cliente;
use App\Reparacion;
use Illuminate\Support\Facades\Input;

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
    return view('layouts.gestionInterna');
});

Route::get('/buscar', function () {
    return view('layouts.buscar');
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

Route::post('/search',function(){
    $q = Input::get ( 'q' );
    $cliente = Cliente::where('Dni','LIKE','%'.$q.'%')->orWhere('Apellido','LIKE','%'.$q.'%')->get();
    if(count($cliente) > 0)
        return view('vehiculos.createVehiculo')->withDetails($cliente)->withQuery ( $q );
    else return view ('vehiculos.createVehiculo')->withMessage('No Details found. Try to search again !');
});