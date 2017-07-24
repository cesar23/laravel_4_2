@extends('layouts.master')

@section('titulo')
Bienvenido a mi pagina
@stop

@section('cabecera')
	@parent
				<link href="estilo2.css" rel="stylesheet" type="text/css" />
@stop

@section('contenido')
Esto es el contenido
@stop

@section('pie')
Esto es el pie de la página
@stop

@extends('layouts.master')
 
@section('titulo')
Bienvenido a mi pagina
@stop
 
@section('cabecera')
	@parent
				<link href="estilo2.css" rel="stylesheet" type="text/css" />
@stop
 
@section('contenido')
Esto es el contenido
@stop
 
@section('pie')
Esto es el pie de la página
@stop