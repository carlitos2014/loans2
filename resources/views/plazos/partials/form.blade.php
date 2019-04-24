<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('num_dias', 'Numero de dias') }}
	{{ Form::text('num_dias', null, ['class' => 'form-control', 'id' => 'num_dias']) }}
</div>
<div class="form-group">
	{{ Form::label('x', 'X') }}
	{{ Form::text('x', null, ['class' => 'form-control', 'id' => 'x']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>