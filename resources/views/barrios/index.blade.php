@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Barrios
                    @can('barrios.create')
                    <a href="{{ route('barrios.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>
                @if ($barrios->isEmpty())
                    <p>No hay registros.</p>
                @else
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Ciudad</th>
                                <th colspan="3">Acciones&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barrios as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->Ciudad->name }}</td>
                                @can('barrios.show')
                                <td width="10px">
                                    <a href="{{ route('barrios.show', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('barrios.edit')
                                <td width="10px">
                                    <a href="{{ route('barrios.edit', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('barrios.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['barrios.destroy', $row->id], 
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
                    {{ $barrios->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection