<div class="form-group">
	{{ Form::label('cedula', 'Cedula') }}
	{{ Form::text('cedula', null, ['class' => 'form-control', 'id' => 'cedula']) }}
</div>
<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('last_name', 'Apellido') }}
	{{ Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last_name']) }}
</div>
<div class="form-group">
	{{ Form::label('phone', 'Telefono') }}
	{{ Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone']) }}
</div>
<div class="form-group">
	{{ Form::label('address', 'Direccion') }}
	{{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address']) }}
</div>
<div class="form-group">
	{!! Form::label('barrio_id', 'Barrio *') !!}
	{!! Form::select('barrio_id', $barrio, null, ['class' => 'form-control', 'placeholder' => ('Seleccione Un Barrio')]) !!}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>