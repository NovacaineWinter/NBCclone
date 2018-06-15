<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="siteurl" content="{{{url('/')}}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link href="{{{url('/css/app.css')}}}" rel="stylesheet" type="text/css">
        
        <title>Nottingham Boat Co</title>     

    </head>

    <body>

        <div id="app">            
        
            @include('layouts.components.header')

            <router-view></router-view>

            @include('layouts.components.footer')

        </div>

    </body>



    <script src="{{{ url('js/app.js') }}}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</html>

