{{--*/ $i=1; /*--}}
<style>
	.redondeaDiv{
		border-radius:15px; -webkit-border-radius:15px; -moz-border-radius:15px;
	}
</style>
<link rel="stylesheet" href="{{asset('css/muestraInstituciones.css')}}"/>
<div class="dropdown">
    <button id="myBtn" class="dropbtn redondeaDiv">Institución</button>
    <div id="myDropdown" class="dropdown-content redondeaDiv">
        @foreach($instituciones as $institucion)    
            <a href="#" onclick="ocultaLista('{{$institucion->institucion}}')">{{$institucion->institucion}}</a>
        @endforeach
    </div>
</div>
<script>
document.getElementById("myBtn").onclick = function() {muestraLista()};

function muestraLista() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function ocultaLista(institucion) {
    document.getElementById("myDropdown").classList.toggle("show");
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
        }
    })
    .done(function (msg) {
        $("#contenedorCursos").empty();
        $("#contenedorCursos").append(msg)
    });
}
</script>
