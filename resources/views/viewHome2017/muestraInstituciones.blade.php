    {{--*/ $i=1; /*--}}
<link rel="stylesheet" href="{{asset('css/muestraInstituciones.css')}}"/>
<div class="dropdown">
<button id="myBtn" class="dropbtn">Institución</button>
    <div id="myDropdown" class="dropdown-content">
        @foreach($instituciones as $institucion)    
            <a href="#" onclick="ocultaLista()">{{$institucion->institucion}}</a>
        @endforeach
    </div>
</div>
<script>
document.getElementById("myBtn").onclick = function() {muestraLista()};

function muestraLista() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function ocultaLista() {
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>
