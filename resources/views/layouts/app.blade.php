<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">
        <title>{{config('app.name', 'LSAPP')}}</title>

        <!-- Fonts -->

    </head>
    <body>
        @yield('content')
    </body>
</html>
