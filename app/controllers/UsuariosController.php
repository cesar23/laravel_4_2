<?php
class UsuariosController extends BaseController
{
	// metodo se ejecuta por defecto primero Index
	public function getIndex()
 	{
 		return 'Aqui podemos listar a los usuarios de la Base de Datos:';
 	}
 
 	// metodo para mostrar un formulario de registro
 	public function getRegistrar()
 	{
 		// desplegamos un formulario básico
 		echo 'Aqui podemos registrar a los usuarios: ';
 		echo Form::open(array('url' => 'usuarios/crear', 'method' => 'post'));
 		echo Form::label('name', 'Nombre: ');
 		echo Form::text('nombre');
 		echo Form::submit('Registrar');
 		echo Form::close();
 
 	}
	// metodo para registrar y mostrar el usuario
 	public function postCrear()
 	{
 		// recibimos la variable enviada por el formulario con el metodo post
 		$nombre = Input::get('nombre');
 		return 'Usuario Registrado: '.$nombre;
 	}
 	//metodo para mostrar el perfil del usuario
 	public function getPerfil()
 	{
 		return 'Aqui podemos mostrar el perfil del usuario: ';
 	}




public function getVista1()
 	{	
 	    //return View::make('vista1')->with('nombre', 'Juan');
 	    //redireccionar a la vista 2
 		return Redirect::to('usuarios/vista2')->with('mensaje', 'error al acceder');;
 
 	}
 
    public function getVista2()
    {
    	return View::make('vista2',array('nombre'=>'Juan','apellido'=>'Zamora','telefono'=>'78451257'));
 
    }
 
 }
