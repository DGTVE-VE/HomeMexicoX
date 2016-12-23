@section('titleMexicoX')
MéxicoX
@stop
@extends('home2017')
@section('menuMexicoX')
@include('viewHome2017.encabezadoMexicoX')
@endsection
@section('cuerpoMexicoX')
@include('viewHome2017.banner')
<div class="navbar navbar-header barraGuia col-md-12 col-lg-12 col-xs-12 col-sm-12">
    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12" >
        <div><h3 style="border-right: 2px solid black; margin-right: -20px;">CURSOS</h3></div>
    </div>
    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
        <h3 id="clasificacion">Recientes</h3>
    </div>
    <div class="col-lg-1 col-md-1  col-sm-2 col-xs-12" id="selectInstitucion" style="padding-top:15px;"></div>
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
    $.ajax({
        method: "POST",
        url: "{{url('Home2017/obtieneInstituciones/0')}}",
        data: {
            _token: "{{csrf_token()}}"
        },
        error: function (ts) {
            console.log(ts.responseText);
        }
    })
            .done(function (msg) {
                $("#selectInstitucion").empty()
                $("#selectInstitucion").append(msg)
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
        $.ajax({
            method: "POST",
            url: "{{url('Home2017/obtieneInstituciones')}}" + "/" + $element.attr('value'),
            data: {
                _token: "{{csrf_token()}}"
            },
            error: function (ts) {
                console.log(ts.responseText);
            }
        })
                .done(function (msg) {
                    $("#selectInstitucion").empty()
                    $("#selectInstitucion").append(msg)
                });
    });
</script>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection
