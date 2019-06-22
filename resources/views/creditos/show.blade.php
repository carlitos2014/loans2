@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Credito No.</div>

                <div class="panel-body">                                        
                    <p><strong>Valor</strong>               $ {{ $credito->valor }}</p>
                    <p><strong>Intereses</strong>           $ {{ $credito->Tasa->name/100*$credito->valor*$credito->Plazo->x }}</p>
                    <p><strong>Saldo Total</strong>         $ {{ $credito->valor+$credito->Tasa->name/100*$credito->valor*$credito->Plazo->x}}</p>
                    <p><strong>Tasa</strong>                % {{ $credito->Tasa->name }}</p>
                    <p><strong>Plazo</strong>               {{ $credito->Plazo->name }}</p>
                    <p><strong>Forma de Pago</strong>       {{ $credito->Metodo->name }}</p>
                    <p><strong>Cuotas</strong>              {{ $credito->Plazo->num_dias/$credito->Metodo->dias }}</p>
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