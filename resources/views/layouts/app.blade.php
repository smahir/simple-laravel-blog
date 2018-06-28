<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name', 'Simple Blog')}}</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
         <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="{{asset('css/blog.css')}}" rel="stylesheet">
    </head>
   
    <body>
        <div class="container">
            @include('layouts.navbar')
            @yield('content')
       </div>
            @include('layouts.footer')
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
            CKEDITOR.replace( 'article-ckeditor' );
            </script>
    </body>
</html>
