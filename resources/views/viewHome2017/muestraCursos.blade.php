    {{--*/ $i=1; /*--}}
    @foreach($cursosFiltrados as $curso)
        <div class="col-md-4">
            <div class="col-md-11 col-md-offset-1 cuadro">
                <div class="col-md-4 imgCurso">
                    <img class="foto pull-left img-responsive" src="{{$curso->thumbnail}}" style="width:200px; height:150px;">
                </div>
                <div class="col-md-8">
                    <div class="caption tituloCurso text-uppercase">{{$curso->course_name}}</div>
                    <div class="caption fechaCurso">Empieza {{$curso->inicio}}</div>
                    <div style="position:relative; margin-top:15px;"><i class="glyphicon glyphicon-asterisk asteriskBco"></i><a href="#"><i class="fa fa-chevron-circle-right btnCurso"></i></a></div>
                </div>
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