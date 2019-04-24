@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>

                <div class="panel-body">                    
                    {{ Form::open(['route' => 'users.store', 'enctype' => 'multipart/form-data']) }}

                        @include('users.partials.form')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
