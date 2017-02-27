{{--*/ $i=1; $urlCursosXInstitucion = url('Home2017/cursosInstitucion');/*--}}
<link rel="stylesheet" href="{{asset('css/muestraInstitucion.css')}}"/>
<div class="dropdown" onfocusout="cierraLista()">
    <button id="myBtn" class="dropbtn redondeaDiv">Institución<span class="caret"></span></button>
    <div id="myDropdown" class="dropdown-content redondeaDiv altoListaInst">
        {{--*/ $i=1 /*--}}
        @foreach($instituciones as $institucion)    
            <p id="opInstitu{{$i}}" class="manoApunta" onclick="ocultaLista('{{$institucion->institucion}}', '{{$urlCursosXInstitucion}}','{{csrf_token()}}', '{{$categoria}}')" onmouseenter="resaltaOpcion(this.id)" onmouseleave="opcionNormal(this.id)">
                {{$institucion->nombre_institucion}}</p>
            {{--*/$i++/*--}}
        @endforeach
    </div>
</div>
<script src="{{asset('js/listaInstituciones.js')}}"></script>
