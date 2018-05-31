<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        @if($cookiesOk)
            @include(env('TRACKING_TEMPLATE'))
        @endif


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="siteurl" content="{{{url('/')}}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        



        <title>@yield('title')</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,500,600" rel="stylesheet" type="text/css">-->
        <link href="{{{url('/css/fonts.css')}}}" rel="stylesheet" type="text/css">



        <!-- jQuery -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <script src="{{{url('/js/jquery.min.js')}}}"></script>



        <!-- Bootstrap -->
        <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">-->
        <link href="{{{url('/css/bootstrap.css')}}}" rel="stylesheet" type="text/css">
        
        <!-- Application styles -->
        <link href="{{{ url('css/style.css') }}}" rel="stylesheet" type="text/css">
        <link href="{{{ env('SITE_SPECIFIC_STYLESHEET') }}}" rel="stylesheet" type="text/css">


        <script src="{{{ url('js/ajax.js') }}}"></script>

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token() }}'
                }
            });
        </script>
        
    </head>

    <body>
    
        <img src="{{{ env('HEADER_LOGO') }}}" id="logoimg" class="brandingimg" alt="logo"/>
    
        <div id="navbar">
            <div class="top-right links pcdevice" id="fullwidth">
                <a href="{{{ env('ALT_SITE_URL') }}}" class="navborder">{{{ env('ALT_SITE_NAME') }}}</a>
                <a>&nbsp;</a>
                <a href="{{{ url('/') }}}">Home</a>
                <a href="{{{ url('stock') }}}" class="navborder">Boats in Stock</a>                
                <a href="{{{ url('model') }}}" class="navborder">Explore Range</a>
                @if(env('HAS_CONFIGURATOR')) <a href="{{{ url('configure') }}}" class="navborder">Build My Boat</a> @endif
                <a href="{{{ url('contact') }}}">Contact Us</a>
                <!--<a href="" id="cookieExpandArrow">&#8681;</a>-->
            </div>



            <div class="top-right links mobiledevice" id="expand-nav-button">
                <a href="">Menu</a>             
            </div>



            <div class="top-right links mobiledevice" id="narrowNav">
                <ul>
                    <li><a href="{{{ url('/') }}}">Home</a></li>
                    <li><a href="{{{ url('stock') }}}">Boats in Stock</a></li>
                    <li><a href="{{{ url('configure') }}}">Configure My Sailaway</a></li>
                    <li><a href="{{{ url('contact') }}}">Contact Us</a></li>
                </ul>
            </div>

        </div> 
        @yield('cookiebar')   

        <div id="content-holder">

            @yield('content')
        </div>

        @if(!isset($suppressFooter))
            <div id="footer">
                <div class="links">
                    <a href="{{{ url('/') }}}">Home</a>
                    <a href="{{{ url('/dataprotection') }}}">Data Protection</a>
                    <a href="{{{ url('/cookiePolicy') }}}">Cookie Policy</a>
                    <a href="{{{ url('/settings') }}}">Settings</a>
                    <a href="{{{ url('/') }}}">&copy; Nottingham Boat Co LTD {{{ date('Y') }}}</a>                
                </div>
                 <img src="{{{ env('FOOTER_LOGO') }}}" style="position:absolute" id="footimg"  class="brandingimg" alt="logo"/>
            </div>
        @endif
    </body>
</html>
