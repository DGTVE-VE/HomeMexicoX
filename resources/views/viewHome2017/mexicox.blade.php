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
        <div class="col-md-6">
            <div class="caption tituloCurso text-uppercase">Educación Intercultural</div>
            <div class="caption fechaCurso">Empieza 13 enero 2016</div>
            <div class=""><i class="fa fa-chevron-circle-right btnCurso"></i></div>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3 cuadro">
        <img class="foto" src="http://placehold.it/150x150">
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3 cuadro">
        <img class="foto" src="http://placehold.it/150x150">
    </div>
</div>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection

