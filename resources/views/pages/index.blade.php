@extends('layouts.app')

@section('content')

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic"><a href="/posts/{{ $featured[0]->id }}">{{ $featured[0]->title }}</a></h1>
        <p class="lead my-3">{!! str_limit(($featured[0]->body), 200) !!}</p>
      </div>
    </div>

    <div class="row mb-2">
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="/posts/{{ $featured[1]->id }}">{{ $featured[1]->title }}</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">{!! str_limit(($featured[1]->body), 100) !!}</a>
        </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
    </div>
    </div>
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="/posts/{{ $featured[2]->id }}">{{ $featured[2]->title }}</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">{!! str_limit(($featured[2]->body), 100) !!}</a>
        </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
        </div>
        </div>
        </div>
    </div>

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
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">{{ $post->user->name }}</a></p>
              <hr>
              
              {!! str_limit(($post->body), 200) !!}

              </div><!-- /.blog-post -->
            @endforeach
         
              {{$posts->links()}}
          {{-- <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav> --}}

        </div><!-- /.blog-main -->
         @endif
       @include('layouts.sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->


@endsection