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
                    <div class=""><br><i class="fa fa-chevron-circle-right btnCurso"></i></div>
                </div>
            </div>
        </div>
        @if($i%3==0)
            <div class="col-md-12" style="padding:10px;"></div>
        @endif
        {{--*/ $i++; /*--}}
    @endforeach