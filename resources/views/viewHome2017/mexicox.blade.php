@section('titleMexicoX')
MéxicoX
@stop
@extends('home2017')
@section('menuMexicoX')
@include('viewHome2017.encabezadoMexicoX')
@endsection
@section('cuerpoMexicoX')
@include('viewHome2017.banner')
<div class="navbar navbar-header barraGuia col-md-12">
    <div class="col-lg-1 col-md-2">
        <h3>CURSOS</h3>
    </div>
    <div class="col-lg-1 col-md-1">
        <img class="img-responsive" src="img/lineaVertical.png" style="height: 45px; width: 45px; margin: auto; margin-top:5px;"/>
    </div>
    <div class="col-lg-5 col-md-6">
        <h3 id="clasificacion">Recientes</h3>
    </div>
</div>
<div id="contenedorCursos" class="col-md-12"> </div>
<script>
    $.ajax({
        method: "POST",
        url: "{{url('Home2017/filtroCursos/0')}}",
        data: {
            _token: "{{csrf_token()}}"
        },
        error: function (ts) {
            console.log(ts.responseText);
        }
    })
    .done(function (msg) {
        $("#contenedorCursos").append(msg)
    });
    $(document).on('click', 'a.ligaCategoria', function () {
        var $element = $(this);
        $.ajax({
            method: "POST",
            url: "{{url('Home2017/filtroCursos')}}" + "/" + $element.attr('value'),
            data: {
                _token: "{{csrf_token()}}"
            },
            error: function (ts) {
                console.log(ts.responseText);
            }
        })
        .done(function (msg) {
            $("#clasificacion").empty();
            $("#clasificacion").append($element.html());
            $("#contenedorCursos").empty();
            $("#contenedorCursos").append(msg);
        });
    });
</script>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection
