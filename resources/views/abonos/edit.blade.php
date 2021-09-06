@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Abonos</div>

                <div class="panel-body">                    
                    {!! Form::model($abonos, ['route' => ['abonos.update', $abonos->id],
                    'method' => 'PUT']) !!}

                        @include('abonos.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection