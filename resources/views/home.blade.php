@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Форма добавления товара</div>

                <div class="panel-body">
				@if(count($errors)>0)
				@foreach ($errors->all() as $err)
				<h3>{{$err}}</h3>
				@endforeach
				@endif 
				
				
                 <form method='post'action='home' enctype = 'multipart/form-data'>
				 	
					{{csrf_field()}}
  <div class="form-group">
    <label for="name">Название</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="пфапфва">
  </div>
  <div class="form-group">
    <label for="price">Цена</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Цена ">
  </div>
  
    <div class="form-group">
    <label for="body">Описание</label>
   <textarea class="form-control" name="body" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" name='picture1'>
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
