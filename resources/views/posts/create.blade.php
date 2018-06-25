@extends('layouts.app')

@section('content')

{{-- @include('layouts.jumbotron') --}}

     <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic">
            Publish a post
          </h3>
         <hr>

        <form action="/posts" method="POST">
             {{ csrf_field() }}
         <div class="form-group">
          <input type="text" name="title" class="form-control" placeholder="Title" required/>
          <br>
          <textarea name="body" id="body" class="form-control" cols="30" rows="10" placeholder="Post text here..." required></textarea>
         </div>
         <button type="submit" class="btn btn-primary">Publish</button>
        </form>
        <br>
        {{-- Side rules section --}}         
         </div>
         <div class="col-md-4 blog main">
             <ul class="pb-3 mb-4 font-italic">
                 <h3 class="pb-3 mb-4 font-italic">
                    Rules:
                 </h3>
                 <li>Rule 1</li>
                 <li>Rule 2</li>
                 <li>Rule 3</li>
             </ul>
         </div>
      </div><!-- /.row -->

    </main><!-- /.container -->


@endsection