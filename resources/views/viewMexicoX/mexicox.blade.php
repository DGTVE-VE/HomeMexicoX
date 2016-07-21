@section('titleMexicoX')
MéxicoX
@stop
@extends('indexMexicoX')
@section('menuMexicoX')
@include('viewMexicoX.encabezadoMexicoX')
@endsection
@section('cuerpoMexicoX')
@include('viewMexicoX.banner')
<br>
<div class="col-md-1"></div>
<div class="panel-group col-md-10" id="accordion">
    @foreach ($clasifica as $item => $clasificacion)
    <div class="panel panel-default">        
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse{{$item}}">
            <h4 class="panel-title">
                <a class="accordion-toggle">
                    {{$clasificacion->categoria}}
                </a>
            </h4>
            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>

        <div id="collapse{{$item}}" class="panel-collapse collapse">
            <div class="panel-body">
                @foreach ($cursos as $item =>$curso)
                @if ($clasificacion->categoria == $curso->categoria)
                <div class="col-md-3 padding-thumbnail div-curso" >                
                    <a style="text-decoration: none" href="http://mx.televisioneducativa.gob.mx/courses/{{ $curso->course_id }}/about">
                        <div class="thumbnail thumbnail-size-large center-block border-thumbnail">
                            <div class="opacity">                                
                                <img class="thumbnail-image-large img-tin"src="{{ $curso->thumbnail }}" alt="...">
                                <div class="textoAprender text-center">Aprender más</div>
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
                @endif
                @endforeach
            </div>
        </div>     

    </div>
    @endforeach    
</div>
<div class="col-md-1"></div>
@endsection
@section('pieMexicoX')
@include('viewMexicoX.pieMexicoX')
@endsection

