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


<h1 class="text-primary">Listado de activos</h1>

    <div class="btn-group">
        <button class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Exportar Datos</button>
        <ul class="dropdown-menu " role="menu">
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'json',escape:'false'});"> <img src='{{ URL::to('img/icons/json.png') }}' width='24px'> JSON</a></li>
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"> <img src='{{ URL::to('img/icons/json.png') }}' width='24px'> JSON (ignoreColumn)</a></li>
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'json',escape:'true'});"> <img src='{{ URL::to('img/icons/json.png') }}' width='24px'> JSON (with Escape)</a></li>
            <li class="divider"></li>
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'xml',escape:'false'});"> <img src='{{ URL::to('img/icons/xml.png')}}' width='24px'> XML</a></li>
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'sql'});"> <img src='{{ URL::to('img/icons/sql.png') }}' width='24px'> SQL</a></li>
            <li class="divider"></li>
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'csv',escape:'false'});"> <img src='{{ URL::to('img/icons/csv.png') }}' width='24px'> CSV</a></li>
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'txt',escape:'false'});"> <img src='{{ URL::to('img/icons/txt.png') }}' width='24px'> TXT</a></li>
            <li class="divider"></li>

            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'excel',escape:'false'});"> <img src='{{ URL::to('img/icons/xls.png') }}' width='24px'> XLS</a></li>
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'doc',escape:'false'});"> <img src='{{ URL::to('img/icons/word.png') }}' width='24px'> Word</a></li>
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'powerpoint',escape:'false'});"> <img src='{{ URL::to('img/icons/ppt.png') }}' width='24px'> PowerPoint</a></li>
            <li class="divider"></li>
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'png',escape:'false'});"> <img src='{{ URL::to('img/icons/png.png') }}' width='24px'> PNG</a></li>
            <li><a href="#" onClick ="$('#MyTable').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> <img src='{{ URL::to('img/icons/pdf.png') }}' width='24px'> PDF</a></li>
        </ul>
    </div>

    @include('activos.form.separador')

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

                </div>
            </div>
        </div>
    </div>

@endsection