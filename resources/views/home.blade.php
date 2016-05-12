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
    </head>
    <body>        
        <div class="container">
            <div class = "row">
                <div class = "col-md-3">
                    <a href="http://mx.televisioneducativa.gob.mx/"><img src="{{url('img/logo.png')}}"></a>
                </div>
                <div class = "col-md-3 padding-superior">
                    <a href="http://mx.televisioneducativa.gob.mx/register?next=%2Fdashboard"><p class = "text-left">REGISTRARSE</p></a>
                </div>
                <div class="col-md-3 padding-superior">
                    <div class="input-group">

                        <form action="{{url('busca')}}" method="POST">
                            <input name="termino" type="text" class="form-control" placeholder="Quiero aprender de...">
                            <span class="input-group-btn boton-busca">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                        </form>
                    </div><!-- /input-group -->
                </div>
                <div class = "col-md-3 padding-superior">
                    <a href="http://mx.televisioneducativa.gob.mx/login"><img class = "pull-right" src="{{url ('img/boton_inicio_sesion.png') }}"></a>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-12">
                <img class="main-banner" src="{{'img/banner_mexicox.png'}}"> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/x-Xo9gNH1eY?rel=0&amp;controls=0&amp;showinfo=0;autoplay=0" frameborder="0" allowfullscreen="" style="border: 2px solid red; position: absolute; top: 70px; left: 200px;"></iframe>
            </div>
        </div>

        <div class = "container-fluid padding-container">

            <div class="row" >

                @if(!empty($cursos))


                @foreach($cursos as $curso)
                <div class="col-md-3 padding-thumbnail div-curso" >
                    <a style="text-decoration: none" href="http://mx.televisioneducativa.gob.mx/courses/{{ $curso->course_id }}/about">
                        <div class="thumbnail thumbnail-size-large center-block border-thumbnail">
                            <div class="opacity">                                
                                <img class="thumbnail-image-large img-tin"src="{{ $curso->thumbnail }}" alt="...">
                                <div class="textover"><h2>Aprender más</h2></div>
                            </div>
                            
                            <div class="caption">
                                <div class="row"><div class="course-organization">{{ $curso->institucion }}</div></div>
                                <div class="row"><div class="course-code">{{ $curso->course_id }}</div></div>
                                <div class="row"><div class="course-title">{{ $curso->course_name }}</div></div>
                                <div class="row"><div class="course-date">Empieza: {{ $curso->inicio }}</div></div>
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
Log::info('Memory Usage:'.Request::path()." - " . (memory_get_peak_usage (true)/1024/1024) . " MB");
?>