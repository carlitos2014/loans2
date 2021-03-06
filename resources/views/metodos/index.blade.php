@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Metodos de Pagos
                    @can('metodos.create')
                    <a href="{{ route('metodos.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>
                @if ($metodos->isEmpty())
                    <p>No hay registros.</p>
                @else
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Dias</th>
                                <th colspan="3">Acciones&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($metodos as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->dias }}</td>
                                @can('metodos.show')
                                <td width="10px">
                                    <a href="{{ route('metodos.show', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('metodos.edit')
                                <td width="10px">
                                    <a href="{{ route('metodos.edit', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('metodos.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['metodos.destroy', $row->id], 
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
                    {{ $metodos->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection