<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


        
        <title>{{config('app.name', 'LSAPP')}}</title>

        <!-- Fonts -->

    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>


        {{-- Problem section, ckeditor may be payed need to figure out a replacement here --}}

    </body>
</html>
