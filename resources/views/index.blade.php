@extends('layouts.app')

@section('content')

@if(Auth::user()->autorizado)

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body" style="height: 400px;">
                    Marco de inicio
                </div>
            </div>
        </div>
    </div>
</div>
@else
    <div class="container">
    <section class="login-form">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body" style="height: 400px;">
                    Amigo no estas autorizado
                    <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">
                        <a href="{!!URL::to('/logout')!!}" style="color: #FFFFFF;"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endif

@endsection
