@extends('layouts.app')

@section('content')

@include('layouts.jumbotron')

     <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

          @if (count($posts) > 0)
            @foreach ($posts as $post)
            <div class="blog-post">
            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
              <p class="blog-post-meta">{{$post->created_at}} by <a href="#">Mark</a></p>
              <hr>
              
              {{$post->body}}

              </div><!-- /.blog-post -->
            @endforeach
          @endif

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

       @include('layouts.sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->


@endsection