<div class="form-group">
	{!! Form::label('cliente_id', 'Cliente *') !!}
	{!! Form::select('cliente_id', $cliente, null, ['class' => 'form-control', 'placeholder' => ('Seleccione Un Cliente')]) !!}
</div>
<div class="form-group">
	{{ Form::label('valor', 'Valor') }}
	{{ Form::text('valor', null, ['class' => 'form-control', 'id' => 'valor']) }}
</div>
<div class="form-group">
	{!! Form::label('tasa_id', 'Tasa *') !!}
	{!! Form::select('tasa_id', $tasa, null, ['class' => 'form-control', 'placeholder' => ('Seleccione Una Tasa')]) !!}
</div>
<div class="form-group">
	{!! Form::label('plazo_id', 'Plazo *') !!}
	{!! Form::select('plazo_id', $plazo, null, ['class' => 'form-control', 'placeholder' => ('Seleccione Un Plazo')]) !!}
</div>
<div class="form-group">
	{!! Form::label('formapago_id', 'Forma de pago *') !!}
	{!! Form::select('formapago_id', $formapago, null, ['class' => 'form-control', 'placeholder' => ('Seleccione Una Forma de Pago')]) !!}
</div>
<div class="form-group">
	{{ Form::label('date', 'Fecha') }}
	{{ Form::date('date', null, ['class' => 'form-control', 'id' => 'date']) }}
</div>
<div class="form-group">
	{{ Form::label('name_fiador', 'Nombre del fiador') }}
	{{ Form::text('name_fiador', null, ['class' => 'form-control', 'id' => 'name_fiador']) }}
</div>
<div class="form-group">
	{{ Form::label('lastname_fiador', 'Apellido del fiador') }}
	{{ Form::text('lastname_fiador', null, ['class' => 'form-control', 'id' => 'lastname_fiador']) }}
</div>
<div class="form-group">
	{{ Form::label('phone_fiador', 'Telefono del fiador') }}
	{{ Form::text('phone_fiador', null, ['class' => 'form-control', 'id' => 'phone_fiador']) }}
</div>
<div class="form-group">
	{{ Form::label('address_fiador', 'Direccion del fiador') }}
	{{ Form::text('address_fiador', null, ['class' => 'form-control', 'id' => 'address_fiador']) }}
</div>
<div class="form-group">
	{{ Form::label('observacion', 'Observacion') }}
	{{ Form::textarea('observacion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>