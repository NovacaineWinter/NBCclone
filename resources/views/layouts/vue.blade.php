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
       <div id="fb-root"></div>
       <script>(function(d, s, id) {
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) return;
           js = d.createElement(s); js.id = id;
           js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=2152862214949518&autoLogAppEvents=1';
           fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
       </script>


        <div id="app">            
        
            <img src="{{{ env('HEADER_LOGO') }}}" id="logoimg" class="brandingimg" alt="logo"/>

            <navbar-component></navbar-component>

            <router-view></router-view>

            <footer-component></footer-component>

        </div>

    </body>

    <script src="{{{ url('js/app.js') }}}"></script>
</html>

