<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Simple Blog')}}</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
