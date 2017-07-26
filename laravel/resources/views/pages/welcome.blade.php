

@extends('main')
@section('title','| Homepage')

@section('content')

        <div class='row'>
            <div class="col-md-12">
                    <div class="jumbotron">
                          <h1>Welcome to my blog!</h1>
                          <p class= 'lead'> Here is my latest posts!</p>
                          <p><a class="btn btn-primary btn-lg" href="#" role="button">Latest posts</a></p>
                    </div> 
             </div>

         </div> <!-- end of header row-->
         <div class='row'>
            <div class='col-md-8' >
                @foreach ($posts as $post)


                <div class="post">
                    <h3>{{$post->title}}</h3>
                    <p> {{substr($post->body,0,200) }} {{strlen($post->body) > 200 ? "..." : ""}}</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                @endforeach
              </div> 

                 

            <div class="col-md-3 col-md-offset-1"></div>
            <h2>sidebar</h2>
        </div>
@endsection


  