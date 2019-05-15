@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Abonos
                    @can('abonos.create')
                    <a href="{{ route('abonos.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>
                @if ($abonos->isEmpty())
                    <p>No hay registros.</p>
                @else
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>No. Credito</th>
                                <th>Valor</th>
                                <th>Fecha de Abono</th>
                                <th>Observacion</th>
                                <th colspan="3">Acciones&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($abonos as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->credito_id }}</td>
                                <td>{{ $row->valor }}</td>
                                <td>{{ $row->date }}</td>
                                <td>{{ $row->observacion }}</td>
                                @can('abonos.show')
                                <td width="10px">
                                    <a href="{{ route('abonos.show', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('abonos.edit')
                                <td width="10px">
                                    <a href="{{ route('abonos.edit', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('abonos.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['abonos.destroy', $row->id], 
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
                    {{ $abonos->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection