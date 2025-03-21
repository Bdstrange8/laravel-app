    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script> 

        <script src="../../ckeditor/ckeditor.js"></script>

        <script src="{{ asset('js/ckeditor-init.js') }}"></script>

    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
        </div>


            {{-- <script>
                if(document.getElementById('editor1')){
                    CKEDITOR.replace('editor1');
                }
                else{
                    ;
                }
            </script> --}}


    </body>
    </html>

