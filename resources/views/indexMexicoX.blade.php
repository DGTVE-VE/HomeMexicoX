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
        <!--Bootstrap-->
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/cerulean/bootstrap.min.css" rel="stylesheet" type="text/css"/>        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--Javascript-->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{{ asset('js/efectos.js') }}"></script>
        <!--Fuentes-->
        <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
        <!--favicon-->
        <link rel="shortcut icon" href="{{ asset('mexicox.ico') }}" >
        <!--Css extra-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/principal.css') }}">
    </head>
    <body>
        <header>
            @yield('menuMexicoX')
        </header>
            @yield('cuerpoMexicoX')
            @yield('pieMexicoX')
    </body>
</html>