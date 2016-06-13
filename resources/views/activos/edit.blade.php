{!!Html::style('css/dataTables.bootstrap.css')!!}

{!!Html::style('css/bootstrap.min.css')!!}
{!!Html::style('css/bootstrap-editable.css')!!}
{!!Html::style('css/bootstrap-toggle.min.css')!!}
{!!Html::style('css/bootstrap-datetimepicker.min.css')!!}
{!!Html::style('css/fontawesome-iconpicker.min.css')!!}
{!!Html::style('css/bootstrap.custom.css')!!}
{!!Html::style('css/sb-admin-2.css')!!}
{!!Html::style('css/login.css')!!}
{!!Html::style('css/font-awesome.min.css')!!}


{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/bootstrap-editable.min.js')!!}
{!!Html::script('js/bootstrap-toggle.min.js')!!}
{!!Html::script('js/moment.js')!!}
{!!Html::script('js/locale/es.js')!!}
{!!Html::script('js/bootstrap-datetimepicker.min.js')!!}
{!!Html::script('js/fontawesome-iconpicker.js')!!}
{!!Html::script('js/iconset-glyphicon.min.js')!!}
{!!Html::script('js/metisMenu.min.js')!!}
{!!Html::script('js/sb-admin-2.js')!!}
{!!Html::script('js/alert.js')!!}
{!!Html::script('js/datatables.js')!!}

<div class="container">

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

                    <button type="submit" id="editar_activo" class="btn btn-lg btn-primary"><i class="fa fa-btn fa-edit"></i> Editar activo </button>&nbsp;&nbsp;&nbsp;
                    <button type="button" data-dismiss="modal" class="btn btn-lg btn-primary"><i class="fa fa-btn fa-remove"></i> Cancelar</button>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>


