@extends('layouts.app')

@section('content')

@if (Auth::check() AND Auth::user()->sadmin == 1)

    <script>
        $(document).ready(function(){
            $('#MyTable').dataTable({
                "language": {
                    "url": "/lang/datatables.es.lang"
                }
            });

            var token = $("#token").val();

            $('#MyTable a').editable({
                url: '/auth/list/post',
                mode: 'inline',
                ajaxOptions: {
                    type: 'PUT',
                    dataType: 'json',
                    headers: {'X-CSRF-TOKEN': token}
                }
            });

            $('.switch').change(function() {
                var $activo = $(this).prop('checked');
                var pk_field = $(this).attr('id');

                if($activo) $valor = 1;
                    else $valor = 0;

                var str_array = pk_field.split(':');

                for(var i = 0; i < str_array.length; i++) {
                    if(isNaN(str_array[i]))
                        $field = str_array[i];
                    else
                        $pk = str_array[i];
                }

                $.ajax({
                    type: "PUT",
                    dataType: "json",
                    url: "/auth/list/post",
                    headers: {'X-CSRF-TOKEN': token},
                    data: {"pk" : $pk, "name" : $field ,"value" : $valor}
                })
            });

            $('.icp').on('iconpickerSelected', function(e) {
                var pk_field = $(this).attr('id');
                var data = e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);

                switch (data) {
                    case 'fa fa-minus':
                        $valor = "0";
                        break;
                    case 'fa fa-user':
                        $valor = "1";
                        break;
                    case 'fa fa-wrench':
                        $valor = "2";
                        break;
                    case 'fa fa-star':
                        $valor = "3";
                        break;
                }

                var str_array = pk_field.split(':');

                for(var i = 0; i < str_array.length; i++) {
                    if(isNaN(str_array[i]))
                        $field = str_array[i];
                    else
                        $pk = str_array[i];
                }

                 $.ajax({
                    type: "PUT",
                    dataType: "json",
                    url: "/auth/list/post",
                    headers: {'X-CSRF-TOKEN': token},
                    data: {"pk" : $pk, "name" : $field ,"value" : $valor}
                })
            });

        });
    </script>

<div class="container">
<h1 class="text-primary">Control de Usuarios</h1>

<table class="table table-bordered" id="MyTable">
    <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Email</th>
        <th class="text-center">Delegación</th>
        <th class="text-center">Empresa</th>
        <th class="text-center">Admin</th>
        <th class="text-center">Autorizado</th>
        <th class="text-center">SACE</th>
        <th class="text-center">OPS</th>
        <th class="text-center">MAN</th>
        <th class="text-center">CAJA</th>
        <th class="text-center">TALL</th>
        <th class="text-center">ALM</th>
        <th class="text-center">SEG</th>
        <th class="text-center">CAL</th>
        <th class="text-center">Borrar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>

            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <td class="text-center">{{ $usuario->id }}
            </td>
            <td class="text-center">
                <a href="#" data-type="text" data-pk="{{ $usuario->id }}" data-name="nombre">{{ $usuario->nombre }}</a>
                </td>
            <td class="text-center">
                <a href="#" data-type="text" data-pk="{{ $usuario->id }}" data-name="email">{{ $usuario->email }}</a>
            </td>

            <td class="text-center">
                <a href="#" data-type="select" data-pk="{{ $usuario->id }}" data-name="m_delegacion_id" data-showbuttons="false" data-source='/delegacion' class="editable editable-click" >{{ \App\Delegacion::find($usuario->m_delegacion_id)->descripcion }}</a>
            </td>

            <td class="text-center">
                <a href="#" data-type="select" data-pk="{{ $usuario->id }}" data-name="m_empresa_id" data-showbuttons="false" data-source='/empresa' class="editable editable-click" >{{ \App\Empresa::find($usuario->m_empresa_id)->descripcion }}</a>
            </td>

            <td class="text-center">
                {{ \App\Helpers\IDEOSHelpers::es_autorizado($usuario->sadmin,'sadmin',$usuario->id) }}
            </td>

            <td class="text-center">
                {{ \App\Helpers\IDEOSHelpers::es_autorizado($usuario->autorizado,'autorizado',$usuario->id) }}
            </td>

            <td class="text-center">
                {{ \App\Helpers\IDEOSHelpers::nivel_autorizacion($usuario->sg_sace,'sg_sace',$usuario->id) }}
            </td>

            <td class="text-center">
                {{ \App\Helpers\IDEOSHelpers::nivel_autorizacion($usuario->sg_terminales,'sg_terminales',$usuario->id) }}
            </td>

            <td class="text-center">
                {{ \App\Helpers\IDEOSHelpers::nivel_autorizacion($usuario->sg_manuales,'sg_manuales',$usuario->id) }}
            </td>

            <td class="text-center">
                {{ \App\Helpers\IDEOSHelpers::nivel_autorizacion($usuario->sg_caja,'sg_caja',$usuario->id) }}
            </td>

            <td class="text-center">
                {{ \App\Helpers\IDEOSHelpers::nivel_autorizacion($usuario->sg_taller,'sg_taller',$usuario->id) }}
            </td>

            <td class="text-center">
                {{ \App\Helpers\IDEOSHelpers::nivel_autorizacion($usuario->sg_almacen,'sg_almacen',$usuario->id) }}
            </td>

            <td class="text-center">
                {{ \App\Helpers\IDEOSHelpers::nivel_autorizacion($usuario->sg_seguros,'sg_seguros',$usuario->id) }}
            </td>

            <td class="text-center">
                {{ \App\Helpers\IDEOSHelpers::nivel_autorizacion($usuario->sg_calidad,'sg_calidad',$usuario->id) }}
            </td>

            <td class="text-center">

                {!! Form::open(['route' => ['auth.list.destroy', $usuario->id], 'method' => 'DELETE']) !!}

                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>

                {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Email</th>
        <th class="text-center">Delegación</th>
        <th class="text-center">Empresa</th>
        <th class="text-center">Admin</th>
        <th class="text-center">Autorizado</th>
        <th class="text-center">SACE</th>
        <th class="text-center">OPS</th>
        <th class="text-center">MAN</th>
        <th class="text-center">CAJA</th>
        <th class="text-center">TALL</th>
        <th class="text-center">ALM</th>
        <th class="text-center">SEG</th>
        <th class="text-center">CAL</th>
        <th class="text-center">Borrar</th>
    </tr>
    </tfoot>
</table>

    <script>
        $(function() {
            $('.icp-dd').each(function() {
                var $this = $(this);
                $this.iconpicker({
                    title: false,
                    animation: true,
                    hideOnSelect: true,
                    icons: ['fa-minus', 'fa-user', 'fa-wrench', 'fa-star'],
                    container: $(' ~ .dropdown-menu:first', $this),
                    component: '.iconpicker-component', // children component jQuery selector or object, relative to the container element
                });
            });
        });

    </script>
@endif

@endsection