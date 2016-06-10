<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

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


</head>

<body>

<div>

@if (Auth::check() AND Auth::user()->autorizado == 1)

    <div id="wrapper">

        @include('layouts.menu_login')

        <div id="page-content-wrapper" style="min-height: 200px;">
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>

@elseif (Auth::check() AND Auth::user()->autorizado == 0)
        <div class="container">
            <section class="login-form">
                <div class="row">
                    <div class="col-md-10 col-md-offset-0">
                        <div class="panel panel-default">
                            <div class="panel-heading">Welcome</div>

                            <div class="panel-body" style="height: 400px;">
                                Amigo no estas autorizado

                                    <a href="{!!URL::to('/logout')!!}" class="btn btn-lg btn-primary btn-block" style="color: #FFFFFF;"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @include('layouts.footer')
@else
        @yield('content')
        @include('layouts.footer')
@endif


</div>

</body>

</html>
