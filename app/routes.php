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

//-------busqueda de uno a uno
//fuente:http://www.arielmax.com.ar/2-mysql-bd-eloquent-relacion-uno-a-uno-laravel4/ 
Route::get('buscar', function()
{
	$usuario = User::find(2)->dni;
 
	return $usuario->user->nombre.' '.$usuario->numero;
	
 
});

Route::get('actualizar', function()
{
	
	$usuario = User::find(2)->dni;
	
	$usuario->user->nombre = "Juan Carlos";
	$usuario->user->telefono = 412544;
	$usuario->numero = 1254120;
 
	$usuario->user->save();
	
	$usuario->save();
 
});




 /*
Route::get('eliminar', function()
{
 
	$usuario = User::find(1);
	$usuario->delete();
 
});
 
Route::get('actualizar', function()
{
	
	$usuario = User::find(2)->dni;
	
	$usuario->user->nombre = "Juan Carlos";
	$usuario->user->telefono = 412544;
	$usuario->numero = 1254120;
 
	$usuario->user->save();
	
	$usuario->save();
 
});
*/




/*

Route::get('/', function()
{	
    return View::make('login');	

});

//login
Route::post('login', 'UserLogin@user');
//logout
Route::get('logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});
// ruta de administracion
Route::get('admin', array('before' => 'auth', function()
{
    return View::make('dashboard.index');	
}));
*/


//rutas del sistema
// Route::controller('package', 'PackageController');
// Route::controller('users', 'UsersController');
// Route::controller('user/getuser', 'getuserController');

/*
// app/routes.php
// llamar al controlador Mostrar index
Route::get('/', 'EjemploControlador@mostrarIndex');
// llamar al controlador Mostrar mensaje
Route::get('mensaje', 'EjemploControlador@mostrarMensaje');
// llamar al controlador Morstrar nombre
Route::get('nombre/{nombre}', 'EjemploControlador@mostrarNombre');

//llamamos al controlador RESTFUL  Esto enrutara a todos los metodos a la vez
Route::controller('usuarios','UsuariosController');
*/
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