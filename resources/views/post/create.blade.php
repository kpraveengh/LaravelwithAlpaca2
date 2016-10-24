@extends('layouts.app')
@extends('layouts.layout')
@section('title')
Homepage
@endsection

@section('body')
@section('content')

    <div class="container">
             <form class="form-horizontal" role="form" method="post" action="/post">  
                     
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-6">
                        <input type="text" id="firstName" name="title" placeholder="Post Title" class="form-control" required="required" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="post_body" class="col-sm-3 control-label">Post Details</label>
                    <div class="col-sm-6">
                        <textarea name="post_body" rows="5" placeholder="Post Descriptioon" class="form-control" required="required" autofocus></textarea> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-primary" >Create Post</button>
                    </div>
                </div>
            </form> 
        </div> 
       
@endsection

@endsection
