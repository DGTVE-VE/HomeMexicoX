{{--*/ $i=1; $fechaHoy = date_create('now');/*--}}
<br>
@foreach($cursosFiltrados as $curso)
    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 cuadroCurso">
        <div class="col-md-11 col-md-offset-1 cuadro box">
            <div class="btnCurso" style="position: absolute; right:15px; bottom: 15px; z-index:1;"><a href="http://mx.mexicox.gob.mx/courses/{{$curso->id_curso}}/about"><img style="width:7%;" class="pull-right" src="{{asset('img/botonIrCurso.png')}}" ></a></div>
            <div class="col-md-6 col-sm-6 col-lg-5 col-xs-6 imgCurso">
                <img class="foto pull-left img-responsive" src="http://mx.mexicox.gob.mx{{$curso->thumbnail}}">
            </div>
            <div class="col-md-6 col-sm-6 col-lg-7 col-xs-6" style="padding-right: 12%;">
                @if(strlen($curso->nombreCurso) < 60)
                    <div class="caption tituloCurso text-uppercase"><br>{{$curso->nombreCurso}}</div>
                @else
                    <div class="caption tituloCurso text-uppercase"><br>{{substr($curso->nombreCurso, 0, 60).'...'}}</div>
                @endif
                <div class="caption tituloCurso"> Impartido por: 
                    <strong><span class="text-uppercase" data-toggle="tooltip" data-placement="bottom" title="{{$curso->nombre_institucion}}">{{$curso->institucion}}</span></strong>
                </div>
                @if($fechaHoy < date_create($curso->inicioInscripcion))
                    <div class="caption fechaCurso"> Inicio inscripciones: <br class="visible-xs"/><span class="tituloCurso">{{ substr($curso->inicioInscripcion, 0, 10) }}</span></div>
                    <div class="caption fechaCurso"> Fin inscripciones: <br class="visible-xs"/><span class="tituloCurso">{{ substr($curso->finInscripcion, 0, 10) }}</span></div>
                @elseif($fechaHoy < date_create($curso->finInscripcion))
                    <div class="caption fechaCurso"> Fin inscripciones: <br class="visible-xs"/><span class="tituloCurso">{{ substr($curso->finInscripcion, 0, 10) }}</span></div>
                    <div class="caption fechaCurso"> Inicio curso: <br class="visible-xs"/><span class="tituloCurso">{{ substr($curso->inicioCurso, 0, 10) }}</span></div>
                @elseif($fechaHoy < date_create($curso->inicioCurso) || $fechaHoy < date_create($curso->finCurso))
                    <div class="caption fechaCurso"> Inicio curso: <br class="visible-xs"/><span class="tituloCurso">{{ substr($curso->inicioCurso, 0, 10) }}</span></div>
                    <div class="caption fechaCurso"> Fin curso: <br class="visible-xs"/><span class="tituloCurso">{{ substr($curso->finCurso, 0, 10) }}</span></div>
                @else
                    <div class="caption fechaCurso"> Fin curso: <br class="visible-xs"/><span class="tituloCurso">{{ substr($curso->finCurso, 0, 10) }}</span></div>
                @endif
            </div>
            @if($fechaHoy < date_create($curso->inicioInscripcion))
                <div class="ribbon"><span style="background: linear-gradient(#9999ff 0%, #1a1aff 100%) !important;">Próximamente</span></div>
            @elseif($fechaHoy > date_create($curso->finCurso))
                <div class="ribbon"><span style="background: linear-gradient(#999999 0%, #666666 100%) !important;">Finalizado</span></div>
            @elseif($fechaHoy >= date_create($curso->inicioInscripcion) && $fechaHoy <= date_create($curso->finInscripcion))
                <div class="ribbon"><span>Inscripciones</span></div>
            @elseif($fechaHoy >= date_create($curso->finInscripcion) && $fechaHoy <= date_create($curso->inicioCurso))
                <div class="ribbon"><span style="background: linear-gradient(#ebb943 0%, #D03B30 100%) !important;">Por Iniciar</span></div>
            @elseif($fechaHoy >= date_create($curso->inicioCurso) && $fechaHoy <= date_create($curso->finCurso))
                <div class="ribbon"><span style="background: linear-gradient(#3bbf2a 0%, #5fbf3d 100%) !important;">En curso</span></div>
            @endif
        </div>
    </div>
    <div class="col-xs-12 visible-xs" style="padding:10px;"></div>
    @if($i%2==0)
        <div class="col-sm-12 visible-sm" style="padding:10px;"></div>
    @endif
    @if($i%3==0)
        <div class="col-lg-12 col-md-12" style="padding:10px;"></div>
    @endif
    {{--*/ $i++; /*--}}
@endforeach
@if($i==1)
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-2 col-sm-offset-2"><h3>Por el momento no hay cursos activos para esta clasificación </h3></div>
@endif
@if(($i-1)%3!=0 || $i==1)
    <div class="col-md-12" style="padding:10px;"></div>
@endif
<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>