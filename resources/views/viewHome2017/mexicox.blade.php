@section('titleMexicoX')
MéxicoX
@stop
@extends('home2017')
@section('menuMexicoX')
@include('viewHome2017.encabezadoMexicoX')
@endsection
@section('cuerpoMexicoX')
@include('viewHome2017.banner')
<div class="navbar navbar-header barraGuia col-md-12">
    <h3>Cursos</h3>
</div>
<div class="col-md-12 cursos">
    <div class="col-md-3 cuadro">
        <div class="col-md-6 imgCurso">
            <img class="foto pull-left" src="http://placehold.it/150x150">
        </div>
        <div class="col-md-6"><br>
            <div class="caption tituloCurso text-uppercase">Educación Intercultural</div><br>
            <div class="caption fechaCurso">Empieza 13 enero 2016</div><br>
            <div class=""><i class="fa fa-chevron-circle-right btnCurso"></i></div>
        </div>
    </div>   
</div>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection

