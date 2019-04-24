@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Plazos</div>

                <div class="panel-body">                    
                    {!! Form::model($plazo, ['route' => ['plazos.update', $plazo->id],
                    'method' => 'PUT']) !!}

                        @include('plazos.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection