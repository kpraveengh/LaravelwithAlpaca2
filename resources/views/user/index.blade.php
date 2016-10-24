@extends('layouts.app')
@extends('layouts.layout')
@section('title')
Homepage
@endsection


@section('body')
@section('content')

@if (session('status'))
<div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> {{ session('status') }}
  </div>
@endif
<div class="row">

			@foreach($users as $user)
			<div class="col-md-3">
				<div class="card">
				  <img class="card-img-top" src="http://www.hutui6.com/data/out/43/67821160-cool-lines-wallpapers.jpg" alt="Card image cap">
				  <div class="card-block">
				    <h4 class="card-title"><a href="{{ URL::to('user/'.$user->id) }}" >{{$user->name}}</a></h4>
				    
				    <p class="card-text" style="text-align: justify;">{{$user->email}}</p>
				    
				    <div class="row">
				    <div class="col-md-3">
				        {!! Form::open([
				            'method' => 'DELETE',
				            'route' => ['user.destroy', $user->id]
				        ]) !!}
				            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
				        {!! Form::close() !!}
				    </div>
				    <div class="col-md-3">				        
				        <a href="{{ URL::to('user/'.$user->id.'/edit') }}" class="btn btn-success">Edit</a>
				    </div>
				    <div class="col-md-3">				        
				        <a href="{{ URL::to('user/'.$user->id) }}" class="btn btn-primary">View </a>
				    </div>
				    </div>
				  </div>
				</div>

			</div>
@endforeach
</div>

        

    
@endsection

@endsection
