@extends('layouts.app')

@section('content')

    <script>
        $(document).ready(function(){

            $('#MyTable').dataTable({
                "language": {
                    "url": "/lang/datatables.es.lang"
                }
            });

        });
    </script>

<div class="container">
<h1 class="text-primary">Listado de activos</h1>

<table class="table table-bordered table-hover" id="MyTable">
    <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Delegación</th>
        <th class="text-center">Empresa</th>
        <th class="text-center">Resp mtmo</th>
        <th class="text-center">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($activos as $activo)
        <tr>

            <td class="text-center"><a href="#">{{ $activo->id }}</a></td>
            <td class="text-center">{{ $activo->nombre }}</td>
            <td class="text-center">{{ \App\Delegacion::find($activo->m_delegacion_id)->descripcion }}</td>
            <td class="text-center">{{ \App\Empresa::find($activo->m_empresa_id)->descripcion }}</td>
            <td class="text-center">{{ \App\Resp_mtmo::find($activo->m_resp_mtmo_id)->descripcion }}</td>
            {!! Form::open(['route' => ['activo.destroy', $activo->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <a href="{{ url('/activo/'.$activo->id.'/edit') }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </td>

            {!! Form::close() !!}

        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Delegación</th>
        <th class="text-center">Empresa</th>
        <th class="text-center">Resp mtmo</th>
        <th class="text-center">Acciones</th>
    </tr>
    </tfoot>
</table>

@endsection