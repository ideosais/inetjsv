<script>
    function cambia_punto_coma(txt){
        txt.value = txt.value.replace(',', '.');
    }

    $(function () {
        $('#fecha_compra_div').datetimepicker({
            locale: 'es',
            format: 'L',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
    });

</script>

<!--- --->
<?php
if(isset($activo)){
    $delegacion_val = $activo->m_delegacion_id;
    $empresa_val = $activo->m_empresa_id;
    $resp_mtmo_val = $activo->m_resp_mtmo_id;
    $valor_compra = $activo->valor_compra;
    $fecha_compra = \App\Helpers\IDEOSHelpers::cambia_fecha_de_mysql($activo->fecha_compra);
    $alive = $activo->alive;
} else {
    $delegacion_val = 'null';
    $empresa_val = 'null';
    $resp_mtmo_val = 'null';
    $valor_compra = '';
    $fecha_compra = '';
    $alive = '0';
}

if($alive)
    $alive_txt = 'checked';
else
    $alive_txt = '';
?>

<div class="row">
    <div class="form-group">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-4">
                    {!! Form::label('nombre','Nombre: ') !!}
                    {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del activo'])!!}
                </div>
                <div class="col-xs-4">
                    {!! Form::label('delegacion','Delegacion: ') !!}
                    {!!Form::select('delegacion', \App\Models\Maestros\Delegacion::lists('descripcion','id'), $delegacion_val , ['class' => 'form-control', 'placeholder' => '--- Delegación ---' ])!!}

                </div>
                <div class="col-xs-4">
                    {!! Form::label('empresa','Empresa: ') !!}
                    {!!Form::select('empresa', \App\Models\Maestros\Empresa::lists('descripcion','id') , $empresa_val , ['class' => 'form-control','placeholder' => '--- Empresa ---'])!!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row"><div class="form-group"><div class="col-md-10"></div></div></div>

<div class="row">
    <div class="form-group">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-4">
                    {!! Form::label('valor_compra','Valor compra: ') !!}
                    <div class="input-group">
                        {!! Form::text('valor_compra',null,['class'=>'form-control','placeholder'=>'Valor de compra', 'onkeyUp'=>'return cambia_punto_coma(this);'])!!}
                        <span class="input-group-addon">€</span>
                    </div>
                </div>
                <div class="col-xs-4" >
                    {!! Form::label('fecha_compra','Fecha compra: ') !!}
                    <div class='input-group date' id='fecha_compra_div'>
                        {!! Form::text('fecha_compra',$fecha_compra,['class'=>'form-control','data-date-format'=>'DD-MM-YYYY'])!!}
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
                <div class="col-xs-4">
                    {!! Form::label('alive','En uso? ') !!}
                    <div class='input-group'><input name="alive" class="switch" id="alive" type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success" {{$alive_txt}}>
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row"><div class="form-group"><div class="col-md-10"></div></div></div>

<div class="row">
    <div class="form-group">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-8">
                    {!! Form::label('descripcion','Descripcion: ') !!}
                    {{ Form::textarea('descripcion', null, ['id'=>'descripcion', 'size' => '30x5', 'class'=>'form-control','placeholder'=>'Descripción del activo']) }}

                </div>
                <div class="col-xs-4">
                    {!! Form::label('responsable_mtmo','Responsable Mantenimiento: ') !!}
                    {!!Form::select('responsable_mtmo', \App\Models\Activos\Resp_mtmo::lists('descripcion','id') , $resp_mtmo_val , ['class' => 'form-control','placeholder' => '--- Responsable ---'])!!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row"><div class="form-group"><div class="col-md-10"></div></div></div>
