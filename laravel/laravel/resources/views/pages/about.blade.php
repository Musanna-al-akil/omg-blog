@extends('layouts.app')

@section('content')
       <h1><?php echo $title;?></h1>
       <p> this is the about page.</p>
  
       @foreach($posts as $post)
            <div class="well">
                <div class="row eee" >

                    <div class="col-md-8 col-sm-8">
                      <h2><a style="text-decoration: none;" href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                              <div>
            {!!$post->body!!}
        </div>
                    <h6><small>Written on {{$post->created_at}} by {{$post->user->name}}</small></h6>
                     </div>
                </div>
          
            </div>
        @endforeach
        {{$posts->links()}}
@endsection