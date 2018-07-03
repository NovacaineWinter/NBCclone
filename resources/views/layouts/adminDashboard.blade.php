<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="siteurl" content="{{{url('/')}}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link href="{{{url('/css/admin.css')}}}" rel="stylesheet" type="text/css">
        
        <title>Dashboard | {{{ env('APP_NAME') }}}</title>     

    </head>

    <body>

        <div id="app">            
        
            <img src="{{{ env('HEADER_LOGO') }}}" id="logoimg" class="brandingimg" alt="logo"/>

            <navbar-component></navbar-component>

                <div class="container section whitecontainer">        
                    <router-view></router-view>
                </div>           

            <footer-component></footer-component>

        </div>

    </body>



    <script src="{{{ url('js/admin.js') }}}"></script>
   <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>*/ -->
</html>

