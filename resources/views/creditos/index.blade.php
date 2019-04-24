@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Creditos
                    @can('creditos.create')
                    <a href="{{ route('creditos.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>
                @if ($creditos->isEmpty())
                    <p>No hay registros.</p>
                @else
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Valor</th>
                                <th>Tasa</th>
                                <th>Plazo</th>
                                <th>Forma de pago</th>
                                <th>Fecha</th>
                                <th>Observacion</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($creditos as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>
                                    <a href="{!! action('ClienteController@edit', $row->cliente_id) !!}"> {{ $row->Cliente->name}}</a></td>
                                <td>{{ $row->valor }}</td>
                                <td>{{ $row->tasa }}</td>
                                <td>{{ $row->Plazo->name }}</td>
                                <td>{{ $row->formapago_id }}</td>
                                <td>{{ $row->date }}</td>
                                <td>{{ $row->observacion }}</td>
                                @can('creditos.show')
                                <td width="10px">
                                    <a href="{{ route('creditos.show', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('creditos.edit')
                                <td width="10px">
                                    <a href="{{ route('creditos.edit', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('creditos.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['creditos.destroy', $row->id], 
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
                    {{ $creditos->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection