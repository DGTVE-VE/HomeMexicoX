<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="{{ asset('js/efectos.js') }}"></script>
        <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/principal.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
        <meta charset= "utf-8">
        <style>
            .fit {
                max-width: 100%;
                max-height: 100%;
                min-width: 100%;
                padding: 0;
                margin: 0;
                display: block;
                margin: auto;
            }
        </style>
    </head>
    <body style="padding: 0; margin: 0;">
        <img id="the_pic" class="fit" src="{{asset('img/banner_formacion.jpg')}}" >    

        <div class = "container-fluid padding-container">

            <div class="row" >

                @if(!empty($cursos))
                @foreach($cursos as $curso)
                <div class="col-md-3 padding-thumbnail" >
                    <a style="text-decoration: none" href="http://mexicox.gob.mx/courses/{{ $curso->course_id }}/about">
                        <div class="thumbnail thumbnail-size-large center-block border-thumbnail">
                            <div class="opacity">                                
                                <img class="thumbnail-image-large img-tin"src="{{'http://mexicox.gob.mx/' . $curso->thumbnail }}" alt="...">
                                <div class="textover"><h2>Aprender más</h2></div>
                            </div>

                            <div class="caption">
                                <div class="course-organization">{{ $curso->institucion }}</div>
                                <div class="course-code">{{ $curso->course_id }}</div>
                                <div class="course-title">{{ $curso->course_name }}</div>
                                <div class="course-date">Empieza: {{ $curso->inicio }}</div>
                            </div>
                        </div>
                    </a>
                </div>   
                @endforeach

                @endif
            </div>
        </div>
        <div class="container-fluid">
            <hr>
        </div>
        <div class="container">
            <div class = "row">
                <div class="col-md-8">
                    <ul class="lista-horizontal sin-paddingleft">
                        <li class="elemento"><a href="http://mx.televisioneducativa.gob.mx/about">Acerca de</a></li>
                        <li class="elemento"><a href="http://mx.televisioneducativa.gob.mx/blog">Aliados Estratégicos</a></li>
                        <li class="elemento"><a href="http://mx.televisioneducativa.gob.mx/faq">Preguntas frecuentes</a></li>
                        <li class="elemento"><a href="http://mx.televisioneducativa.gob.mx/contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class= "row">
                <div class = "col-md-12">
                    <a href="https://open.edx.org/"><img class= "pull-right logo-edx" src="{{url ('img/openedx-logo.png') }}"></a>
                </div>
            </div>
            <div class= "row">
                <div class = "col-md-12">
                    <a href="http://mx.televisioneducativa.gob.mx/"><img class= "text-right" src="{{url ('img/logo.png')}}"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="texto-footer">© MéxicoX. Todos los derechos reservados, excepto cuando se indique. EdX, Open edX, y los logos de edX y Open edX son marcas registradas de edX Inc.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="lista-horizontal sin-paddingleft">
                        <li><a href="http://mx.televisioneducativa.gob.mx/privacy">Política de privacidad</a></li>
                        <li><a href="http://mx.televisioneducativa.gob.mx/tos">Términos de servicio</a></li>
                        <li><a href="http://mx.televisioneducativa.gob.mx/honor">Código de honor</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>
</html>
<?php
Log::info('Memory Usage:' . Request::path() . " - " . (memory_get_peak_usage(true) / 1024 / 1024) . " MB");
?>