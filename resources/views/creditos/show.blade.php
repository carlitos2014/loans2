@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Credito</div>

                <div class="panel-body">                                        
                    <p><strong>Valor</strong>               $ {{ $credito->valor }}</p>
                    <p><strong>Intereses</strong>           $ {{ $credito->valor * $credito->tasa * $credito->Plazo->x }}</p>
                    <p><strong>Saldo Total</strong>         $ {{ $credito->valor * $credito->tasa * $credito->Plazo->x + $credito->valor }}</p>
                    <p><strong>Tasa</strong>                % {{ $credito->tasa }}</p>
                    <p><strong>Plazo</strong>               {{ $credito->Plazo->name }}</p>
                    <p><strong>Forma de Pago</strong>       {{ $credito->formapago_id }}</p>
                    <p><strong>Valor Cuota</strong>         $ {{ $credito->valor * $credito->tasa * $credito->Plazo->x + $credito->valor / $credito->formapago_id / $credito->Plazo->num_dias}}</p>
                    <p><strong>Numeros cuotas</strong>      {{ $credito->formapago_id / $credito->Plazo->num_dias }}</p>
                    <p><strong>Nombre fiador</strong>       {{ $credito->name_fiador }}</p>
                    <p><strong>Apellido fiador</strong>     {{ $credito->lastname_fiador }}</p>
                    <p><strong>Telefono fiador</strong>     {{ $credito->phone_fiador }}</p>
                    <p><strong>Direccion fiador</strong>    {{ $credito->address_fiador }}</p>
                    <p><strong>Observacion</strong>         {{ $credito->observacion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection