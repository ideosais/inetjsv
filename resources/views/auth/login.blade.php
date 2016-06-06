@extends('layouts.app')
@section('content')
@include('alerts.request')

<section class="container">

    <section class="login-form">
        <form method="POST" action="{{ url('/login') }}" role="login">
                {{ csrf_field() }}
            <img src="/img/JSV_logo_RGB_150.png" class="img-responsive" alt="" />
            <input type="email" name="email" placeholder="Correo electrónico" required class="form-control input-lg" />
            <input type="password" name="password" placeholder="Contraseña" required class="form-control input-lg" />
            <button type="submit" name="go" class="btn btn-lg btn-primary btn-block"><i class="fa fa-sign-in fa-fw"></i>Conectar</button>
            <div>
                <div style="float: left; width: 180px;">{!! link_to('/password/reset', $title = '¿Olvidaste tu contraseña?', $attributes = null, $secure = null)!!}</div>
                <div style="float: right; width: 120px; text-align: right;">{!! link_to('/register', $title = 'Nuevo usuario', $attributes = null, $secure = null)!!}</div>
            </div>
        </form>
    </section>
</section>

@endsection