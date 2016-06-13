
<div class="container">

    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display: none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="text-primary">Editar activo ID: {{$activo->codigo}}
                        <img src="data:image/png;base64,{{DNS2D::getBarcodePNG($activo->codigo, 'QRCODE')}}" alt="barcode" style="float: right; margin-top: -15px;">
                    </h1>
                </div>
                <div class="panel-body">

                    {!! Form::model($activo, [ 'route' => ['activo.update', $activo], 'method' => 'PUT']) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

                    @include('activos.form.editar')

                    <button type="submit" id="editar_activo" class="btn btn-lg btn-primary"><i class="fa fa-btn fa-edit"></i> Editar activo </button>&nbsp;&nbsp;&nbsp;
                    <button type="button" data-dismiss="modal" class="btn btn-lg btn-primary"><i class="fa fa-btn fa-remove"></i> Cancelar</button>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>


