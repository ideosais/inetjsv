@extends('layouts.app')

    @section('content')
        <div class="container">
            <h1 class="text-primary">Control de Activos</h1>
        {!! Form::open() !!}
            @include('activos.form.activo')
            {!! link_to('#', $title='Enviar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null) !!}
        {!! Form::close() !!}
        </div>
    @endsection