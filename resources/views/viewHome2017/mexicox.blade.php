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
    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4" >
        <h3 class="lineaCursos">CURSOS</h3>
    </div>      
    <div class="col-lg-8 col-md-7 col-sm-6 col-xs-4 pull-left">
        <h3  id="clasificacion" class="pull-left" style="margin-top: 0.8%;">Recientes</h3>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" id="selectInstitucion" style="padding-top:10px; padding-bottom:5px;"></div>
</div>
<div id="contenedorCursos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </div>
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
        $("#selectInstitucion").empty();
        $("#selectInstitucion").append(msg);
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
            $("#selectInstitucion").empty();
            $("#selectInstitucion").append(msg);
        });
    });
</script>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection
