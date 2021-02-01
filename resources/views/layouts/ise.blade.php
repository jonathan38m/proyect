<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        @section('alternate')
        <link href="{{ env('APP_URL') }}" rel="canonical"/>
        <link href="https://www.superiorspanishschool.com" hreflang="en" rel="alternate"/>
        <link href="https://www.spanischschule-ecuador.de" hreflang="de" rel="alternate"/>
        <link href="https://www.zuchatispanski.ru" hreflang="ru" rel="alternate"/>
        @show
        <link href="{{ URL::asset('favicon.png') }}" rel="icon" type="image/png"/>
        <link href="{{ URL::asset('favicon.png') }}" rel="shortcut icon"/>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <!-- CSRF Token -->
        <meta content="{{ csrf_token() }}" name="csrf-token"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>
            @section('title') Learn to Speak Spanish in Ecuador @show
        </title>
        <meta content="@section('description') @show" name="description"/>
        <meta content="@section('keywords') @show" name="keywords"/>
        <meta content="General" name="rating"/>
        <meta content="Instituto Superior de Español" name="copyright"/>
        <meta content="english, EN" name="language"/>
        <meta content="global" name="distribution"/>
        <meta content="document" name="resource-type"/>
        <meta content="INDEX,FOLLOW" name="robots"/>
        <meta content="7 Days" name="revisit-after"/>
        <meta content="info@superiorspanishschool.com" name="email"/>
        <meta content="ISE" name="copyright"/>
        <!-- Styles -->
        <link href="{{ asset('css/ise.min.css') }}" rel="stylesheet"/>
        @stack('scriptBefore')
        @show
        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-56QB23B');
        </script>
        <!-- End Google Tag Manager -->
        <script async="" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js" type="text/javascript">
        </script>
    </head>
    <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-56QB23B" style="display:none;visibility:hidden" width="0">
            </iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        @include('layouts.ise.menu')
        @include('layouts.ise.toasts')
        <div id="app">
            @yield('content')
        </div>
        @include('layouts.ise.footer')
        <!-- SCRIPTS-->
        <script src="{{ asset('js/app.js') }}">
        </script>
        @stack('script')
    </body>
</html>
