@extends('layout.admin')
@section('content')

    {!! Form::model($user, [ 'route' => ['usuario.update', $user->id], 'method' => 'PUT']) !!}
        @include('usuario.forms.user')
    {!!Form::close()!!}

    <br>

    {!! Form::open(['route' => ['usuario.destroy', $user->id], 'method' => 'DELETE']) !!}
        {!!Form::submit('Eliminar',['class' => 'btn btn-danger'])!!}
    {!!Form::close()!!}
@stop