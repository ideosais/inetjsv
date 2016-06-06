@extends('layouts.app')
@section('content')
@include('alerts.success')

        <!-- start Login box -->
<section class="container">
    <section class="login-form">
        <form id="formEmpty" method="POST" action="{{ url('/register') }}" role="login">
            {{ csrf_field() }}

            <img src="/images/JSV_logo_RGB_150.png" class="img-responsive" alt="" />
            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                <input id="nombre" type="text" placeholder="Nombre completo" required class="form-control input-lg" name="nombre" value="{{ old('nombre') }}">

                @if ($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" placeholder="Correo electrónico" required class="form-control input-lg"  name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" placeholder="Contraseña" required class="form-control input-lg" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                @endif

            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input id="password-confirm" type="password" placeholder="Confirma contraseña" required class="form-control input-lg" name="password_confirmation">

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('delegacion') ? ' has-error' : '' }}">

                {!!Form::select('delegacion', \App\Delegacion::lists('descripcion','id'), null , ['class' => 'form-control input-lg', 'placeholder' => '--- Selecciona delegación ---' ])!!}

                @if ($errors->has('delegacion'))
                    <span class="help-block">
                            <strong>{{ $errors->first('delegacion') }}</strong>
                    </span>
                @endif

            </div>

            <div class="form-group{{ $errors->has('empresa') ? ' has-error' : '' }}">

                {!!Form::select('empresa', \App\Empresa::lists('descripcion','id') , null , ['class' => 'form-control input-lg','placeholder' => '--- Selecciona empresa ---'])!!}

                @if ($errors->has('empresa'))
                    <span class="help-block">
                            <strong>{{ $errors->first('empresa') }}</strong>
                    </span>
                @endif

            </div>


            <button type="submit" id="btnEmpty" class="btn btn-lg btn-primary btn-block"><i class="fa fa-btn fa-user"></i> Registrar</button>

            <div>
                <div style="float: right; width: 120px; text-align: right;">{!! link_to('/', $title = 'Volver', $attributes = null, $secure = null)!!}</div>
            </div>

        </form>

    </section>
</section>
<!-- End Login box -->

@endsection
