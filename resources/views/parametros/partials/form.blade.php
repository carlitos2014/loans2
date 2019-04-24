<div class="form-group">
	{{ Form::label('nombre_sistema', 'Nombre del sistema') }}
	{{ Form::text('nombre_sistema', null, ['class' => 'form-control', 'id' => 'nombre_sistema']) }}
</div>
<div class="form-group">
	{{ Form::label('base', 'Base') }}
	{{ Form::text('base', null, ['class' => 'form-control', 'id' => 'base']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>