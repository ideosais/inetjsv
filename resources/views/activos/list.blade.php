@extends('layouts.app')

@section('content')

    @include('alerts.request')
    @include('alerts.errors')
    @include('alerts.success')

    <script>
        $(document).ready(function(){

            $('#MyTable').dataTable({
                "language": {
                    "url": "/lang/datatables.es.lang"
                }
            });

            $('.launch-modal').on('click', function(e){
                e.preventDefault();
                $('#myModal').modal('show').find('.modal-body').load($(this).attr('href'));
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
            <td class="text-center">{{ \App\Models\Maestros\Delegacion::find($activo->m_delegacion_id)->descripcion }}</td>
            <td class="text-center">{{ \App\Models\Maestros\Empresa::find($activo->m_empresa_id)->descripcion }}</td>
            <td class="text-center">{{ \App\Models\Activos\Resp_mtmo::find($activo->m_resp_mtmo_id)->descripcion }}</td>
            {!! Form::open(['route' => ['activo.destroy', $activo->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <a href="{{ url('/activo/'.$activo->id.'/edit') }}" class="btn btn-info btn-xs launch-modal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

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

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Do you want to save changes you made to document before closing?</p>
                    <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
                </div>
            </div>
        </div>
    </div>

@endsection