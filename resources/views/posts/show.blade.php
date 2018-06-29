@extends('layouts.app')

@section('content')
    <h3>{{$post->title}}</h3>
    <p> Published on {{ $post->created_at->toFormattedDateString() }} by {{ $post->user->name }}</p>
    @if(Auth::check())
    <ul class="nav">
        <li class="nav-item">
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
        </li>
        <li class="nav-item">
        <form method="POST" action="/posts/{{$post->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
        </li>
    </ul>
    @endif
        <hr>
    <p>{!! $post->body !!}</p>
    <br>
    <h5>Comments</h5>
    <hr>
    <div class="comments">
        <ul class="list-group">
        @foreach ($post->comments as $comment)
            <li class="list-group-item">
               <strong>{{ $comment->user->name }}</strong>
                    {{ $comment->created_at->diffForHumans() }}:
                <hr>
                {{ $comment->body }}
            </li>
        @endforeach
        </ul>
    </div>

    {{-- Add a comment --}}
    <hr>
    @if(Auth::check())
    <div class="card">
        <div class="class-block">
           <form action="/posts/{{ $post->id }}/comments" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" placeholder="Your comment here.." class="form-control" required></textarea>

                </div>

                 <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>

           </form>
    @endif
           @include('layouts.errors')

        </div>

    </div>

    <br>
@endsection