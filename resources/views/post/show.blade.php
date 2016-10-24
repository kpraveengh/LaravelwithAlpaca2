
@extends('layouts.app')
@extends('layouts.layout')
@section('title')
Homepage
@endsection

@section('body')
@section('content')

<div class="content">
<div class="col-md-6">
<div class="card">
  <img class="card-img-top" src="http://www.hutui6.com/data/out/43/67821160-cool-lines-wallpapers.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">{{$post->title}}</h4>
    <p class="card-text">{{$post->post_body}}</p>
    <div class="input-group">
  {!! Form::open([
            'method' => 'DELETE',
            'route' => ['post.destroy', $post->id]
        ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
  <span class="input-group-btn">
     <a href="{{ URL::to('post/'.$post->id.'/edit') }}" class="btn btn-primary" role="button">Edit</a>
  </span>
</div><!-- /input-group -->
    <div class="col-md-3">
        
    </div>
    <div class="col-md-3">
        
      
    </div>
  </div>
</div>
</div>
                

        @endsection

@endsection