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

        $('#grupo_id').on('change', function(e){

            var grupo_id = e.target.value;

            //ajax

            $.get('/activo/clase-dropdown?id=' + grupo_id, function(data){

                //success data
                $('#clase_id').empty();

                $('#clase_id').append('<option selected="selected" value="">--- Clase ---</option>');

                $.each(data, function(index, subcatObj){

                    console.log( index + ": " + subcatObj.id + " --- " + subcatObj.descripcion );

                    $('#clase_id').append('<option value="'
                            + subcatObj.id + '">' + subcatObj.descripcion + '</option>');
                });
            });
        });
    });



</script>

<p> Formulario de búsqueda de activos</p>

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
                                {!!Form::select('delegacion', \App\Models\Maestros\Delegacion::lists('descripcion','id'), null , ['class' => 'form-control', 'placeholder' => '--- Delegación ---' ])!!}

                            </div>
                            <div class="col-xs-4">
                                {!! Form::label('empresa','Empresa: ') !!}
                                {!!Form::select('empresa', \App\Models\Maestros\Empresa::lists('descripcion','id') , null , ['class' => 'form-control','placeholder' => '--- Empresa ---'])!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('activos.form.separador')

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
                                    {!! Form::text('fecha_compra',null,['class'=>'form-control','data-date-format'=>'DD-MM-YYYY'])!!}
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                {!! Form::label('alive','En uso? ') !!}
                                {{ Form::select('alive', [
                                   '0' => 'No',
                                   '1' => 'Si',
                                  ], null, ['class' => 'form-control','placeholder' => '--- En uso? ---']
                                ) }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            @include('activos.form.separador')

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
                                {!!Form::select('responsable_mtmo', \App\Models\Activos\Resp_mtmo::lists('descripcion','id') , null , ['class' => 'form-control','placeholder' => '--- Responsable ---'])!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('activos.form.separador')

            <div class="row">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-4">
                                {!! Form::label('grupo','Grupo: ') !!}
                                {!!Form::select('grupo', \App\Models\Activos\Grupo_activo::lists('descripcion','id'), null , ['id'=>'grupo_id', 'class' => 'form-control', 'placeholder' => '--- Grupo ---' ])!!}

                            </div>
                            <div class="col-xs-4">
                                {!! Form::label('clase','Clase: ') !!}
                                {!!Form::select('clase', \App\Models\Activos\Clase_activo::lists('descripcion','id') , null , ['id'=>'clase_id', 'class' => 'form-control','placeholder' => '--- Clase ---'])!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('activos.form.separador')
