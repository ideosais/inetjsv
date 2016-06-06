@extends('layouts.app')
@section('content')

<section class="container">

    @if (session('status'))
        <div class="alert alert-success alert-dismissible" role="alert" style="width: 50%; margin: 0 auto; ">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ session('status') }}
        </div>
    @endif

    <section class="login-form">
        <form method="POST" action="{{ url('/password/email') }}" role="login">
            {{ csrf_field() }}
            <img src="/img/JSV_logo_RGB_150.png" class="img-responsive" alt="" />

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" required placeholder="Correo electrónico">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit" name="go" class="btn btn-lg btn-primary btn-block"><i class="fa fa-btn fa-envelope"></i> Recuperar contraseña</button>

            <div>
                <div style="float: right; width: 120px; text-align: right;">{!! link_to('/', $title = 'Volver', $attributes = null, $secure = null)!!}</div>
            </div>

        </form>
    </section>
</section>

@endsection
