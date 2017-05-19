<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>@yield('titleMexicoX','MéxicoX')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:url"           content="http://mexicox.gob.mx/" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="MéxicoX" />
        <meta property="og:description"   content="Mooc's gratuitos" />
        <meta property="og:image"         content="http://mx.mexicox.gob.mx/asset-v1:INEE+INEEAPP03x+2017_S1+type@asset+block@imagenInicioPISA.png" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--Javascript-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script src="{{ asset('js/efectos.js') }}"></script>
        <!--Fuentes-->
        <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <!--favicon-->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
        <!--Css extra-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">

        <!--MODAL-->
         <!--<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>-->

    <body>
        <header>
            @yield('menuMexicoX')
        </header>
        @yield('cuerpoMexicoX')
        @yield('pieMexicoX')       
    </body>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-64255351-1', 'auto');
        ga('send', 'pageview');

    </script>    
</html>
