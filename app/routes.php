<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
/*
Route::get('holamundo', function()
{
	return "olamundo";
});

// rutas con expreciones regulares
Route::get('usuario/{name}', function($name)
{
    return $name;
})
->where('name', '[A-Za-z]+');

// mostramos un campo de texto en un formulario y enviamos la información
Route::get('registro', function(){
	echo Form::open(array('url' => 'nombre','method' => 'post'));
	echo Form::label('nombre','Tu Nombre: ');
	echo Form::text('nom');
	echo Form::submit('Enviar');
	echo Form::close();
});

//crecibimos la información del formulario y la mostramos
Route::post('nombre',function(){
$nombre = Input::get('nom');
return 'Tu nombre es: '.$nombre;
});


//enlazar filtro con ruta
Route::get('/', array(
'before' => 'cumpleanios',
function()
{
return View::make('hello');
 }
 ));
 */