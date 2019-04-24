@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Clientes
                    @can('clientes.create')
                    <a href="{{ route('clientes.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>
                @if ($clientes->isEmpty())
                    <p>No hay registros.</p>
                @else
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Barrio</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->cedula }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->last_name }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->Barrio->name }}</td>
                                @can('clientes.show')
                                <td width="10px">
                                    <a href="{{ route('clientes.show', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('clientes.edit')
                                <td width="10px">
                                    <a href="{{ route('clientes.edit', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('clientes.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['clientes.destroy', $row->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $clientes->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection