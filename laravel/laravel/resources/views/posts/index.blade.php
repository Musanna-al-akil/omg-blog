@extends('layouts.app') 

@section('content')
        <h1>posts</h1>
   @if(count($posts) > 0)
       @foreach($posts as $post)
            <div class="well">
                <div class="row eee" >
                     <div class="col-md-4 col-sm-4">
                      <img class="im" style="width:100%" src="storage/cover_images/{{$post->cover_image}}">
                     </div>
                    <div class="col-md-8 col-sm-8">
                      <h2><a style="text-decoration: none;" href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                    <h6><small>Written on {{$post->created_at}} by {{$post->user->name}}</small></h6>
                     </div>
                </div>
          
            </div>
        @endforeach
        {{$posts->links()}}
     @else
         <p>No posts found</p>
    @endif
@endsection