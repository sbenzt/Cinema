<div class="form-group">
    {!!Form::label('Nombre:')!!}
    {!!Form::text('name',null,['class' => 'form-control', 'placeholder' => 'ramon'])!!}
</div>
<div class="form-group"></div>
{!!Form::label('Correo:')!!}
{!!Form::email('email',null,['class' => 'form-control', 'placeholder' => 'user@mail.com'])!!}
<div class="form-group">
    {!!Form::label('Contraseña:')!!}
    {!!Form::password('password',['class' => 'form-control'])!!}
</div>
{!!Form::submit('Enviar',['class' => 'btn btn-primary'])!!}