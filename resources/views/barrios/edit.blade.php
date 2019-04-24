@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Barrios</div>

                <div class="panel-body">                    
                    {!! Form::model($barrio, ['route' => ['barrios.update', $barrio->id],
                    'method' => 'PUT']) !!}

                        @include('barrios.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection