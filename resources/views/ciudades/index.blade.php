@extends('layouts.app')

@section('content')
<div class="container-fluid">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th width="100">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ciudades as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                @can('ciudades.show')
                                <td>
                                    <a href="{{ route('ciudades.show', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                @endcan
                                @can('ciudades.edit')
                                    <a href="{{ route('ciudades.edit', $row->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                @endcan
                                @can('ciudades.destroy')
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
        </tfoot>
    </table>
</div>
@endsection