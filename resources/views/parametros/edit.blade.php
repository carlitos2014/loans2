@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Parametros</div>

                <div class="panel-body">                    
                    {!! Form::model($parametro, ['route' => ['parametros.update', $parametro->id],
                    'method' => 'PUT']) !!}

                        @include('parametros.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection