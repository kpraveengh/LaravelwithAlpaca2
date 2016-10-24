@extends('layouts.app')
@extends('layouts.layout')
@section('title')
Homepage
@endsection

@section('body')
@section('content')

 <div class="content">
               
                {!!Form::model ($user, ['method' =>'patch', 'route' => ['user.update', $user ->id],'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="title" name="name" placeholder="Post Title" class="form-control" value="{{$user->name}}" autofocus>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label" >Password</label>
                    <div class="col-sm-6">
                        <input type="text" name="password" rows="5" placeholder="Post Descriptioon" class="form-control" autofocus value="{{md5($user->password)}}"></textarea> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label" >Post Details</label>
                    <div class="col-sm-6">
                        <input type="teaxt" name="email" rows="5" placeholder="Post Descriptioon" class="form-control" autofocus value="{{$user->email}}"></textarea> 
                    </div>
                </div>
                     <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                   {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

                   </div>
                   </div>

                  {!! Form::close() !!}

@endsection

@endsection

