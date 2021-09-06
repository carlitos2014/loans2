@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ciudades
                    @can('ciudades.create')
                    <a href="{{ route('ciudades.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>
                @if ($ciudades->isEmpty())
                    <p>No hay registros.</p>
                @else
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">Acciones&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ciudades as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                @can('ciudades.show')
                                <td width="10px">
                                    <a href="{{ route('ciudades.show', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        Ver
                                    </a>
                                </td>
                                @endcan
                                @can('ciudades.edit')
                                <td width="10px">
                                    <a href="{{ route('ciudades.edit', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        Editar
                                    </a>
                                </td>
                                @endcan
                                @can('ciudades.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['ciudades.destroy', $row->id], 
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
                    {{ $ciudades->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection