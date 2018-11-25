@extends('layouts.app') 

@section('content')

            <a href="/posts" class="btn btn-primary">Go Back</a>
        <hr>

             <h1>{{$post->title}}</h1>
             <br>
             <h5>written by {{$post->user->name}}</h5>
             <br>
        <div>
             <img style="width:200px;"  src="/storage/cover_images/{{$post->cover_image}}">
         </div>
         <br>
   
        <div>
            {!!$post->body!!}
        </div>
        <hr>
        <amall>written on {{$post->created_at}}</small>
             <br>
             <br><br>
        @if(!Auth::guest())
         @if(Auth::user()->id==$post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
         
            
            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'btn pull-center'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
          @endif
         @endif
@endsection