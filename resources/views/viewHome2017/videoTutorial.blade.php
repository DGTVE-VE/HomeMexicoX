@section('titleMexicoX')
MéxicoX
@stop
@extends('home2017')
@section('menuMexicoX')
<style>
    .margenSupPagina{
        margin-top:60px;
        margin-bottom: 60px;
    }
    .margenTxtTuto{
        padding-top:8%;
    }
    @media(min-width:767px){
        .paddLinkTutor{
            padding:50px;
        }
    }
    @media(max-width:767px){
        .paddLinkTutor{
            padding:15px;
        }
    }
    .separaVideo{
        margin-top:25px;
    }
</style>
<link rel="stylesheet" href="{{asset('css/encabezados.css')}}"/>
<nav class="navbar navbar-default navbar-fixed-top barra">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="http://mexicox.gob.mx/"><img class="img-responsive logoPrincipal" src="{{url('img/logo.png')}}"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse esquinaDerecha">
        <ul class="nav navbar-nav">
            <li><input type="button" class="btnmorado" value="Regístrate" onclick="window.location.href = 'http://mx.mexicox.gob.mx/register?next=%2Fdashboard'"></li>

            <li><input type="button" class="btnverde" value="Iniciar Sesión" onclick="window.location.href = 'http://mx.mexicox.gob.mx/login'"></li>
        </ul>
    </div><!--/.nav-collapse -->
</nav>
@endsection
@section('cuerpoMexicoX')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margenSupPagina">
    <div class="barraGuia col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12" >
            <h3 class="">Tutoriales </h3>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 separaVideo">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
            <video width="100%" height="100%" controls>
                <source src="{{url($archivoVideo)}}" type="video/mp4">
                Tu navegador no soporta el reproductor de video de HTML5.
            </video>
            <h3 class="text-center">Tutorial {{$textoEtiqueta}}</h3>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
    </div>
    <div class="barraGuia col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" >
            <h3 class="">Todos los tutoriales </h3>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 margenTxtTuto">
            <h4>Tutorial 1: Guia detallada sobre como obtener un registro en la plataforma MéxicoX.</h4>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-offset-0 col-sm-6 col-xs-offset-3 col-xs-6 paddLinkTutor">
            <a href="{{url('Home2017/Tutoriales/1')}}"><img src="{{asset('img/thumbnailTutorial/T1.jpg')}}" class="img-responsive img-thumbnail"/></a>
        </div>
        <div class="hidden-lg hidden-md col-sm-12 col-xs-12"></div>
        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 margenTxtTuto">
            <h4>Tutorial 2: Tutorial que indica paso a paso como activar su cuenta de MéxicoX</h4>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-offset-0 col-sm-6 col-xs-offset-3 col-xs-6 paddLinkTutor">
            <a href="{{url('Home2017/Tutoriales/2')}}"><img src="{{asset('img/thumbnailTutorial/T2.jpg')}}" class="img-responsive img-thumbnail"/></a>
        </div>
        <div class="hidden-lg hidden-md col-sm-12 col-xs-12"></div>
        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 margenTxtTuto">
            <h4>Tutorial 3: Descripción general sobre como Iniciar Sesión en MéxicoX</h4>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-offset-0 col-sm-6 col-xs-offset-3 col-xs-6 paddLinkTutor">
            <a href="{{url('Home2017/Tutoriales/3')}}"><img src="{{asset('img/thumbnailTutorial/T3.jpg')}}" class="img-responsive img-thumbnail"/></a>
        </div>
        <div class="hidden-lg hidden-md col-sm-12 col-xs-12"></div>
        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 margenTxtTuto">
            <h4>Tutorial 4: Instrucciones detalladas sobre como inscribirse a un curso de MéxicoX</h4>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-offset-0 col-sm-6 col-xs-offset-3 col-xs-6 paddLinkTutor">
            <a href="{{url('Home2017/Tutoriales/4')}}"><img src="{{asset('img/thumbnailTutorial/T4.jpg')}}" class="img-responsive img-thumbnail"/></a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
    </div>
</div>
<script>
</script>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection
