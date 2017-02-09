{{--*/ $i=1; /*--}}
<style>
    .redondeaDiv{
        background-color: white !important;
        color: black !important;       
        padding: 0;
        cursor: pointer;
        /*		border-radius:15px; -webkit-border-radius:15px; -moz-border-radius:15px;*/
    }
    .altoListaInst{
        height:300px;
        width:100%
    }
    .dropbtn{
/*        width: 10px !important;
        border: 1px solid black !important;*/
    }
    .manoApunta{
        cursor:pointer;
        z-index:2;
        padding-right:15px;
        padding-left:15px;
    }
    .opcionOscura{
        background-color:#503F7C;
        color:white;
    }
</style>
<link rel="stylesheet" href="{{asset('css/muestraInstituciones.css')}}"/>
<div class="dropdown" onfocusout="cierraLista()">
    <button id="myBtn" class="dropbtn redondeaDiv">Institución<span class="caret"></span></button>
    <div id="myDropdown" class="dropdown-content redondeaDiv altoListaInst">
        {{--*/ $i=1 /*--}}
        @foreach($instituciones as $institucion)    
            <p id="opInstitu{{$i}}" class="manoApunta" onclick="ocultaLista('{{$institucion->institucion}}')" onmouseenter="resaltaOpcion(this.id)" onmouseleave="opcionNormal(this.id)">
                {{$institucion->nombre_institucion}}</p>
            {{--*/$i++/*--}}
        @endforeach
    </div>
</div>
<script>
    function resaltaOpcion(opcion){
        idOpinst = "#" + opcion;
        $(idOpinst).addClass("opcionOscura");
    }
    function opcionNormal(opcion){
        idOpinst = "#" + opcion;
        $(idOpinst).removeClass("opcionOscura");
    }
    document.getElementById("myBtn").onclick = function() {muestraLista()};
    function muestraLista() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    function cierraLista(){
        setTimeout(function(){ $('#myDropdown').removeClass("show"); },250);
    }
    function ocultaLista(institucion) {
        $.ajax({
        method: "POST",
                url: "{{url('Home2017/cursosInstitucion')}}",
                data: {
                    cat: "{{$categoria}}",
                    imparte: institucion,
                    _token: "{{csrf_token()}}"
                },
                error: function (ts) {
                console.log(ts.responseText);
                $("#contenedorCursos").empty();
                }
        })
        .done(function (msg) {
            $("#contenedorCursos").empty();
            $("#contenedorCursos").append(msg)
        });
        $('#myDropdown').removeClass("show");
    }
</script>
