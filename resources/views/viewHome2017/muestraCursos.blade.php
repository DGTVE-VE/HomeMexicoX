{{--*/ $i=1; /*--}}
<br>
@foreach($cursosFiltrados as $curso)
<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 cuadroCurso">
    <div class="col-md-11 col-md-offset-1 cuadro box">
        <div class="col-md-6 col-sm-6 col-lg-5 col-xs-6 imgCurso">
            <img class="foto pull-left img-responsive" src="{{$curso->thumbnail}}">
        </div>
        <div class="col-md-6 col-sm-6 col-lg-7 col-xs-6">
            <div class="caption tituloCurso text-uppercase"><br>{{$curso->course_name}}</div>
            <div class="caption fechaCurso"> {{$curso->inicio}} | {{$curso->fin}}</div>
            <!--<div style="position:relative; margin-top:15px;"><i class="glyphicon glyphicon-asterisk asteriskBco"></i><a href="#"><i class="fa fa-chevron-circle-right btnCurso"></i></a></div>-->
            <a><div class="btnCurso"><i class="fa fa-chevron-right btnFlecha" aria-hidden="true"></i></span></div></a>            
        </div>
        <div class="ribbon"><span>Reciente</span></div>
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