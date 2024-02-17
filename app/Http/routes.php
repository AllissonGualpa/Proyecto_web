<?php

use App\Http\Controllers\ProyectosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'proyectosController@index');
//esta linea la entiendes?
// cuando pones el / en la barra de busqueda llama al controlador proyectos controller y 
// ejecuta el metodo index y por eso se muestra la pantalla de /
//Route::get('/create', 'proyectosController@create');