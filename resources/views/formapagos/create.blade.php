@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forma de Pagos</div>

                <div class="panel-body">                    
                    {{ Form::open(['route' => 'formapagos.store']) }}

                        @include('formapagos.partials.form')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection