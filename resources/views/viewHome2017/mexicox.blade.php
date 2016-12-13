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
    <div class="col-md-2">
        <h3>Cursos</h3>
    </div>
    <div class="col-md-2">
        <h3>Recientes</h3>
    </div>
</div>
<div class="col-md-12">
    {{--*/ $i=1; /*--}}
    @foreach($recientes as $cursoReciente)
        <div class="col-md-4">
            <div class="col-md-11 col-md-offset-1 cuadro">
                <div class="col-md-4 imgCurso">
                    <img class="foto pull-left img-responsive" src="{{$cursoReciente->thumbnail}}" style="width:200px; height:150px;">
                </div>
                <div class="col-md-8">
                    <div class="caption tituloCurso text-uppercase">{{$cursoReciente->course_name}}</div>
                    <div class="caption fechaCurso">Empieza {{$cursoReciente->inicio}}</div>
                    <div class=""><br><i class="fa fa-chevron-circle-right btnCurso"></i></div>
                </div>
            </div>
        </div>
        @if($i%3==0)
            <div class="col-md-12" style="padding:10px;"></div>
        @endif
        {{--*/ $i++; /*--}}
    @endforeach
</div>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection

