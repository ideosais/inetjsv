@extends('layouts.app')

    @section('content')
        <script>

        function fecha_mysql(fecha)
        {
            var dia = fecha.substr(0,2);
            var mes = fecha.substr(3,2);
            var ano = fecha.substr(6,4);

            fmysql = ano + '/' + mes + '/' + dia;

            return fmysql;
        }

        $(document).ready(function(){
            $("#alta_activo").click(function(e){
                e.preventDefault();
                var route = "/activo";
                var token = $("#token").val();
                var fcompra = $("#fecha_compra").val();
                var fecha_compra = fecha_mysql(fcompra);
                var alive = 0;
                if($("#alive").is(':checked')) alive = 1; else alive = 0;

                $.ajax({
                    url: route,
                    headers: {'X-CSRF-TOKEN': token},
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        nombre: $("#nombre").val(),
                        m_delegacion_id: $("#m_delegacion_id").val(),
                        m_empresa_id: $("#m_empresa_id").val(),
                        m_resp_mtmo_id: $("#m_resp_mtmo_id").val(),
                        valor_compra:  $("#valor_compra").val(),
                        fecha_compra: fecha_compra,
                        alive: alive,
                        descripcion: $("#descripcion").val(),
                    },

                    success:function(){
                        $("#msj-success").fadeIn();
                    }

                });
            });
        });
        </script>
        <div class="container">

            <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display: none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h1 class="text-primary">Control de Activos</h1></div>
                        <div class="panel-body">

                        {!! Form::open() !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                        @include('activos.form.activo')
                        <button type="button" id="alta_activo" class="btn btn-lg btn-primary"><i class="fa fa-btn fa-edit"></i> Alta nuevo activo </button>
                        {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
