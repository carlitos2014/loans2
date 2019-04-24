<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{!! Form::label('ciudad_id', 'Ciudad *') !!}
	{!! Form::select('ciudad_id', $ciudad, null, ['class' => 'form-control', 'placeholder' => ('Seleccione Un Ciudad')]) !!}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>