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
                   @foreach ($products as $one)
                   <div class = 'bg-succes'>
                   <a href="{{asset('product/'.$one->id)}}" class = "btn btn-block btn-success" >
                   {{$one->name}}
                   </a>
                                      @if($one->picture != 0)
                   <img src="{{asset('/media/fotos/s_'.$one->picture)}}" align="left"/>
                   @else
                      <img src="{{asset('/media/fotos/def.jpg')}}" align="left"/> 
               @endif
                   {{$one->body}}
                   <hr/>
                   Цена:
                   {{$one->price}}
<br style="clear:both" />
                   </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
