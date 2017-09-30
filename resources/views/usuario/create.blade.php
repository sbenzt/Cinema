@extends('layout.admin')
@section('content')

	{!!Form::open(['route' => 'usuario.store' , 'method' => 'POST'])!!}
		@include('usuario.forms.user')
	{!!Form::close()!!}
	
@stop