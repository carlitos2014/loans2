@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Creditos</div>

                <div class="panel-body">                    
                    {!! Form::model($credito, ['route' => ['creditos.update', $credito->id],
                    'method' => 'PUT']) !!}

                        @include('creditos.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection