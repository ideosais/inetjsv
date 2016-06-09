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

<div class="row">
    <div class="form-group">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-4">
                    {!! Form::label('nombre','Nombre: ') !!}
                    {!! Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Nombre del activo'])!!}
                </div>
                <div class="col-xs-4">
                    {!! Form::label('m_delegacion_id','Delegacion: ') !!}
                    {!!Form::select('m_delegacion_id', \App\Delegacion::lists('descripcion','id'), null , ['id'=>'m_delegacion_id', 'class' => 'form-control', 'placeholder' => '--- Selecciona delegación ---' ])!!}

                </div>
                <div class="col-xs-4">
                    {!! Form::label('m_empresa_id','Empresa: ') !!}
                    {!!Form::select('m_empresa_id', \App\Empresa::lists('descripcion','id') , null , ['id'=>'m_empresa_id', 'class' => 'form-control','placeholder' => '--- Selecciona empresa ---'])!!}
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
                    <div class="input-group"><input id="valor_compra" type="text" class="form-control" placeholder="Valor de compra" onkeyUp="return cambia_punto_coma(this);">
                        <span class="input-group-addon">€</span>
                    </div>
                </div>
                <div class="col-xs-4" >
                    {!! Form::label('fecha_compra','Fecha compra: ') !!}
                    <div class='input-group date' id='fecha_compra_div'><input id="fecha_compra" name="fecha_compra" type='text' class="form-control">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
                <div class="col-xs-4">
                    {!! Form::label('alive','Activo? ') !!}
                    <div class='input-group'><input class="switch" id="alive" type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success" >
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
                    {!! Form::label('m_resp_mtmo_id','Responsable Mantenimiento: ') !!}
                    {!!Form::select('m_resp_mtmo_id', \App\Resp_mtmo::lists('descripcion','id') , null , ['id'=>'m_resp_mtmo_id', 'class' => 'form-control','placeholder' => '--- Selecciona responsable ---'])!!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row"><div class="form-group"><div class="col-md-10"></div></div></div>

