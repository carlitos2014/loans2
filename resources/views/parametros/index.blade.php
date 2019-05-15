@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Parametros
                    @can('parametros.create')
                    <a href="{{ route('parametros.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>
                @if ($parametros->isEmpty())
                    <p>No hay registros.</p>
                @else
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre del sistema</th>
                                <th>Base</th>
                                <th colspan="3">Acciones&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($parametros as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nombre_sistema }}</td>
                                <td>$ {{ $row->base }}</td>
                                @can('parametros.show')
                                <td width="10px">
                                    <a href="{{ route('parametros.show', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('parametros.edit')
                                <td width="10px">
                                    <a href="{{ route('parametros.edit', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('parametros.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['parametros.destroy', $row->id], 
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
                    {{ $parametros->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection