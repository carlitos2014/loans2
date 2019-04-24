<div class="form-group">
	{!! Form::label('credito_id', 'Credito *') !!}
	{!! Form::select('credito_id', $credito, null, ['class' => 'form-control', 'placeholder' => ('Seleccione Un Credito')]) !!}
</div>
<div class="form-group">
	{{ Form::label('valor', 'Valor Abono') }}
	{{ Form::text('valor', null, ['class' => 'form-control', 'id' => 'valor']) }}
</div>
<div class="form-group">
	{{ Form::label('date', 'Fecha Abono') }}
	{{ Form::date('date', null, ['class' => 'form-control', 'id' => 'date']) }}
</div>
<div class="form-group">
	{{ Form::label('observacion', 'Observacion') }}
	{{ Form::text('observacion', null, ['class' => 'form-control', 'id' => 'observacion']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>