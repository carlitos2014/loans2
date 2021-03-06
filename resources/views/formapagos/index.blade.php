@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Forma de Pagos
                    @can('formapagos.create')
                    <a href="{{ route('formapagos.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>
                @if ($formapagos->isEmpty())
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
                            @foreach($formapagos as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->dias }}</td>
                                @can('formapagos.show')
                                <td width="10px">
                                    <a href="{{ route('formapagos.show', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('formapagos.edit')
                                <td width="10px">
                                    <a href="{{ route('formapagos.edit', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('formapagos.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['formapagos.destroy', $row->id], 
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
                    {{ $formapagos->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection