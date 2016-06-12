@extends('layouts.app')

    @section('content')

        <div class="container">

            @include('alerts.request')

            <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display: none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h1 class="text-primary">Editar activo ID: {{$activo->id}}</h1></div>
                        <div class="panel-body">

                            {!! Form::model($activo, [ 'route' => ['activo.update', $activo], 'method' => 'PUT']) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

                            @include('activos.form.editar')

                            <button type="submit" id="editar_activo" class="btn btn-lg btn-primary"><i class="fa fa-btn fa-edit"></i> Editar activo </button>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
