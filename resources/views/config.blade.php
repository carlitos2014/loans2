@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">                    
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            @can('users.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                            </li>
                            @endcan
                            @can('roles.index')
                            <li class="nav-item">                            
                                <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                            </li>
                            @endcan
                            @can('ciudades.index')
                            <li class="nav-item">                            
                                <a class="nav-link" href="{{ route('ciudades.index') }}">Ciudades</a>
                            </li>
                            @endcan
                            @can('barrios.index')
                            <li class="nav-item">                            
                                <a class="nav-link" href="{{ route('barrios.index') }}">Barios</a>
                            </li>
                            @endcan
                            @can('metodos.index')
                            <li class="nav-item">                            
                                <a class="nav-link" href="{{ route('metodos.index') }}">Formas de pago</a>
                            </li>
                            @endcan
                            @can('plazos.index')
                            <li class="nav-item">                            
                                <a class="nav-link" href="{{ route('plazos.index') }}">Plazos</a>
                            </li>
                            @endcan
                            @can('tasas.index')
                            <li class="nav-item">                            
                                <a class="nav-link" href="{{ route('tasas.index') }}">Tasas</a>
                            </li>
                            @endcan
                            @can('parametros.index')
                            <li class="nav-item">                            
                                <a class="nav-link" href="{{ route('parametros.index') }}">Parametros</a>
                            </li>
                            @endcan
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

