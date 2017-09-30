@extends('layout.admin')
@section('content')

    @if(Session::has('mensaje'))
        <br>
        <div class="alert alert-success fade in alert-dismissable" style="margin-top:18px;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            {{ Session::get('mensaje') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Operacion</th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class' => 'btn btn-primary']) !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop