<?php

use App\Cita;
use App\Cliente;
use App\Reparacion;
use App\Vehiculo;
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

/*ruta página web vista usuarios*/
Route::get('/', function () {

    $user=Auth::user();

    if ($user==null)
    {
        return view('principal');}
    if($user->esAdmin())
    {
        return view('principal');
        echo "eres administrador";
    }
    else {
        return view('principal');
    }
});

/*ruta para el acceso a la gestión interna del taller
Route::get('/taller', function () {
    return view('layouts.gestionInterna');
});

/* ************************** GESTIONA CON ADMIN REGISTRADO ********/
/**/
  Route::get('/taller', 'AdministradorController@index');


/*
 *
 * */



Route::get('/contacto',function(){
    return view('layouts.contacto');
});
            /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/**
Route::post('/citas/fecha/{fecha}',function($fecha){
    return view('citas.controlFecha')->with("fecha",$fecha);
});
**/
//**  Ruta para la gestión de citas que solicitan los usuaios, con el control sobre la fecha introducida**/
Route::get("/citas/fecha/", "ControllerCita@fecha");

                /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


/*
Route::get('/h', function () {
    return "hola";
});
*/
/*-----------------------------------------------------------------------------------------
Route::get("/", "MiControlador@index");
Route::get("/crear", "MiControlador@create");
Route::get("/actualizar", "MiControlador@update");
Route::get("/insertar", "MiControlador@store");
Route::get("/borrar", "MiControlador@destroy");
-----------------------------------------------------------------------------------------*/

/*************************************************************************************************/

/*------------------------      CRUD                        ----------------------------*/

/*Esta linea sustituye a todas las necesarias para la creacion del CRUD de clientes*/
Route::resource('/clientes','MiControlador');

/*redirecciona para el  CRUD de reparaciones*/
Route::resource('/reparaciones','ControllerReparacion');

/*redirecciona para el  CRUD de vehiculos*/
Route::resource('/vehiculos','ControllerVehiculo');

/*redirecciona para el  CRUD de citas*/
Route::resource('/citas','ControllerCita');
/*-------------------------------- FIN CRUD           -----------------------------------*/

/*****************************************************************************************/


/*-------------------- BUSQUEDA DE CLIENTE PARA INSERCION DE VEHICULO----------------------------*/
/* Este Route es el que se encarga de  direccionar para buscar los clientes para ingresar un
vehiculo nuevo a dicho cliente*/
Route::get('/buscar', function () {
    return view('vehiculos.buscar');
});
/* Este Route es el que se encarga de buscar los clientes según los campos requeridos para ingresar un
vehiculo nuevo a dicho cliente*/
Route::post('/search',function(){
    $q = Input::get ( 'q' );
    $cliente = Cliente::where('Dni','LIKE','%'.$q.'%')->orWhere('Apellido','LIKE','%'.$q.'%')->get();
    if(count($cliente) > 0){
        return view('/vehiculos/buscar')->withDetails($cliente)->withQuery ( $q );}
    else return view ('/vehiculos/buscar')->withMessage('¡¡NO encontrado !!');
});
/*-------------------- FIN BUSQUEDA DE CLIENTE PARA INSERCION DE VEHICULO----------------------------*/

/*************************************************************************************************/

/*-------------------- BUSQUEDA DE MATRICULA PARA INSERCION DE REPARACION----------------------------*/
/* Este Route es el que se encarga de  direccionar para buscar la matrícula para ingresar una
reparación nueva a dicho vehículo*/
Route::get('/buscarMatricula', function () {
    return view('reparaciones.buscarMatricula');
});
/* Este Route es el que se encarga de buscar las matrículas según los campos requeridos para ingresar una
reparación nueva a dicho vehículo*/
Route::post('/searchMatri',function(){
    $q = Input::get ( 'q' );
    $vehiculo = Vehiculo::where('Matricula','LIKE','%'.$q.'%')->orWhere('Marca','LIKE','%'.$q.'%')->get();
    if(count($vehiculo) > 0)
        return view('/reparaciones/buscarMatricula')->withDetails($vehiculo)->withQuery ( $q );
    else return view ('/reparaciones/buscarMatricula')->withMessage('¡¡NO encontrado !!');
});
/*-------------------- FIN BUSQUEDA DE MATRICULA PARA INSERCION DE REPARACION----------------------------*/

/*************************************************************************************************/

/*--------------------  LISTADO DE CITAS CONFIRMADAS POR EL TALLER ---------------------------------*/
/*ruta para el listado de Citas confirmadas por el taller*/
Route::get('/Confirmada', function () {
    $citas=Cita::where('Confirma','=',1)->get();
    return view("citas.listadoCitaConfirmada", compact("citas"));

});
/*-------------------- FIN LISTADO DE CITAS CONFIRMADAS POR EL TALLER -------------------------------*/

/*************************************************************************************************/

/*--------------------  LISTADO DE REPARACIONES DE UN VEHICULO  ------------------------------------*/
/*ruta para el listado de reparaciones de un vehículo determinado*/
Route::get('/Repara/{id}', function ($id) {
    $reparaciones=Reparacion::where('vehiculo_id','=',$id)->get();
    return view("reparaciones.listadoReparacion", compact("reparaciones"));
});

/*-------------------- FIN  LISTADO DE REPARACIONES DE UN VEHICULO  ---------------------------------*/

/*************************************************************************************************/

/*-----------------------  BUSCAR REPARACIONES DE UNA MATRICULA ----------------------------*/

Route::get('/reparacionPorMatricula', function () {
    $q = Input::get ( 'q' );
    $vehiculo = Vehiculo::where('Matricula','=',$q)->get();
    if(count($vehiculo) > 0)
        return view('/reparaciones/buscarMatri')->withDetails($vehiculo)->withQuery ( $q );
    else return view ('/reparaciones/buscarMatri')->withMessage('¡¡NO encontrado !!');

});

Route::post('/searchMatr',function(){
    $q = Input::get ( 'q' );
    $vehiculo = Vehiculo::where('Matricula','LIKE','%'.$q.'%')->orWhere('Marca','LIKE','%'.$q.'%')->get();
    if(count($vehiculo) > 0)
        return view('/reparaciones/buscarMatri')->withDetails($vehiculo)->withQuery ( $q );
    else return view ('/reparaciones/buscarMatri')->withMessage('¡¡NO encontrado !!');
});

/*----------------------- FIN  BUSCAR REPARACIONES DE UNA MATRICULA ----------------------------*/

/************************************************************************************************/

/*-----------------------  BUSCAR PROPIETARIO DE UNA MATRICULA ---------------------------------*/
Route::get('/buscarClientePorMatri', function () {
    $q = Input::get ( 'q' );
    $vehiculo = Vehiculo::where('Matricula','=',$q)->get();
    if(count($vehiculo) > 0)
        return view('/clientes/buscarClientePorMatri')->withDetails($vehiculo)->withQuery ( $q );
    else return view ('/clientes/buscarClientePorMatri')->withMessage('¡¡NO encontrado !!');

});

Route::post('/searchMat',function(){
    $q = Input::get ( 'q' );
    $vehiculo = Vehiculo::where('Matricula','LIKE','%'.$q.'%')->orWhere('Marca','LIKE','%'.$q.'%')->get();
    if(count($vehiculo) > 0)
        return view('/clientes/buscarClientePorMatri')->withDetails($vehiculo)->withQuery ( $q );
    else return view ('/clientes/buscarClientePorMatri')->withMessage('¡¡NO encontrado !!');
});

/*-----------------------  FIN BUSCAR PROPIETARIO DE UNA MATRICULA ---------------------------------*/
/************************************************************************************************/

/*-----------------------  BUSCAR PROPIETARIO DE UN  DNI        ---------------------------------*/
Route::get('/buscarClientePorDni', function () {
    return view('clientes.buscarClientePorDni');
});
/* Este Route es el que se encarga de buscar los clientes según los campos requeridos para ingresar un
vehiculo nuevo a dicho cliente*/
Route::post('/searchDni',function(){
    $q = Input::get ( 'q' );
    $cliente = Cliente::where('Dni','LIKE','%'.$q.'%')->orWhere('Apellido','LIKE','%'.$q.'%')->get();
    if(count($cliente) > 0){
        return view('/clientes/buscarClientePorDni')->withDetails($cliente)->withQuery ( $q );}
    else return view ('/clientes/buscarClientePorDni')->withMessage('¡¡NO encontrado !!');
});

/*-----------------------  FIN BUSCAR PROPIETARIO DE UN DNI    ---------------------------------*/
/************************************************************************************************/


/************************************************************************************************/

/*es la que añade todas las rutas para el login, logout, registro y para recuperar la contraseña*/
Auth::routes();
/* ruta para redirigir a los usuarios cuando realicen el login correctamente*/
Route::get('/home', 'HomeController@index')->name('home');













/**
 * ruta de busqueda de tabla una a muchos - A MODO DE EJEMPLO-
esta ruta esta marcada en el archivo- modelo cliente- app/providers/cliente
 *
Route::get("/veh", function(){
    $vehiculos = Cliente::find(1)->vehiculos;
    foreach ($vehiculos as $vehiculo){
        echo $vehiculo->Matricula . "<br/>";
    }
});

Route::get("/clientes/muestraCliente/{id}", function($id){
    return view ('/clientes/muestraCliente')->withDetails($id);
});

*
 *
 *
**/