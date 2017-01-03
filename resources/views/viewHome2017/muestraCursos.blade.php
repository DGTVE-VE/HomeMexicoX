{{--*/ $i=1; /*--}}
<br>
@foreach($cursosFiltrados as $curso)
    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 cuadroCurso">
        <div class="col-md-11 col-md-offset-1 cuadro box">
            <div class="col-md-6 col-sm-6 col-lg-5 col-xs-6 imgCurso">
                <img class="foto pull-left img-responsive" src="{{$curso->thumbnail}}">
            </div>
            <div class="col-md-6 col-sm-6 col-lg-7 col-xs-6" style="padding-right: 12%;">
                <div class="caption tituloCurso text-uppercase"><br>{{$curso->course_name}}</div>
                <div class="caption fechaCurso"> {{ $curso->inicio }} | {{$curso->fin}}</div>
                <div class="btnCurso"><a href="http://www.mexicox.gob.mx/courses/{{$curso->course_id}}/about"><i class="fa fa-chevron-right btnFlecha" aria-hidden="true"></i></a></div>
            </div>
			{{--*/ $fechaHoy = date_create('2016-08-05'); /*--}}
			@if($fechaHoy < date_create($curso->inicio_inscripcion))
				<div class="ribbon"><span>Reciente</span></div>
			@elseif($fechaHoy >= date_create($curso->inicio_inscripcion) && $fechaHoy <= date_create($curso->fin_inscripcion))
				<div class="ribbon"><span>Inscripciones</span></div>
			@elseif($fechaHoy >= date_create($curso->fin_inscripcion) && $fechaHoy <= date_create($curso->inicio))
				<div class="ribbon"><span style="background: linear-gradient(#79A70A 100%, #A482F6 0%) !important;">Por Iniciar</span></div>
			@elseif($fechaHoy >= date_create($curso->inicio) && $fechaHoy <= date_create($curso->fin))
				<div class="ribbon"><span style="background: linear-gradient(green 100%, #A482F6 0%) !important;">En curso</span></div>
			@elseif($fechaHoy > date_create($curso->fin))
				<div class="ribbon"><span style="background: linear-gradient(rgba(0, 0, 0, 1) 100%, #A482F6 0%) !important;">Finalizado</span></div>
			@endif
        </div>
    </div>
    @if($i%3==0)
        <div class="col-md-12" style="padding:10px;"></div>
    @endif
    {{--*/ $i++; /*--}}
@endforeach
@if($i==1)
    <div class="col-md-10 col-md-offset-2"><h3>Por el momento no hay cursos activos para esta clasificación </h3></div>
@endif
@if(($i-1)%3!=0 || $i==1)
    <div class="col-md-12" style="padding:10px;"></div>
@endif