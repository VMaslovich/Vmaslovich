@extends('layouts.app')
@section('styles')
@parent
<link rel="stylesheet" href= "{{asset('media/css/index.css')}}"/>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добро пожаловать на сайт</div>

                <div class="panel-body">
                   Главная страница
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
