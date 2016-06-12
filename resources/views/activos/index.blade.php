@extends('layouts.app')

    @section('content')

        <div class="container">

            @include('alerts.request')
            @include('alerts.errors')
            @include('alerts.success')

            <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display: none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="row"><div class="form-group"><div class="col-md-10"></div></div></div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h1 class="text-primary">Control de Activos</h1></div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                    <a class="btn btn-lg btn-primary" href="{{ url('/activo/create') }}" role="button"><i class="glyphicon glyphicon-plus-sign"></i> Nuevo activo</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row"><div class="form-group"><div class="col-md-10"></div></div></div>

                            {{ Form::open(['method'=>'GET','url'=>'/activo/buscar','role'=>'search']) }}

                            @include('activos.form.buscar')

                            <button type="submit" id="buscar_activo" class="btn btn-lg btn-primary"><i class="glyphicon glyphicon-search"></i> Buscar activos </button>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
