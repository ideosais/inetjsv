@extends('layouts.app')

@section('content')

<!-- start Login box -->
<section class="container">
    <section class="login-form">
        <form method="POST" action="{{ url('/password/reset') }}" role="login">
            {{ csrf_field() }}
            <img src="/img/JSV_logo_RGB_150.png" class="img-responsive" alt="" />

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control input-lg" name="email" value="{{ $email or old('email') }}" required placeholder="Correo electrónico">

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

            <button type="submit" name="go" class="btn btn-lg btn-primary btn-block"><i class="fa fa-btn fa-lock"></i> Nueva contraseña</button>

            <div>
                <div style="float: right; width: 120px; text-align: right;">{!! link_to('/', $title = 'Volver', $attributes = null, $secure = null)!!}</div>
            </div>

        </form>
    </section>
</section>
<!-- End Login box -->
@endsection
