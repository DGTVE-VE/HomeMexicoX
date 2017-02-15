@section('titleMexicoX')
MéxicoX
@stop
@extends('home2017')
@section('menuMexicoX')
@include('viewHome2017.encabezadoMexicoX')
@endsection
@section('cuerpoMexicoX')
@include('viewHome2017.banner')
    <div class="barraGuia col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12" >
            <h3 class="">CURSOS</h3>
        </div>      
        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
            <h3  id="clasificacion">Recientes</h3>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" id="selectInstitucion" style="padding-top:10px; padding-bottom:5px;"></div>
    </div>
    <div id="contenedorCursos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </div>
    <script src="{{asset('js/mexicox.js')}}"></script>
    <script>
        llenaCursos("{{url('Home2017/filtroCursos/0')}}", "{{csrf_token()}}");
        llenaInstituciones("{{url('Home2017/obtieneInstituciones/0')}}", "{{csrf_token()}}");
        $(document).on('click', 'a.ligaCategoria', function () {
            var $element = $(this);
            llenaCursosCategoria("{{url('Home2017/filtroCursos')}}", "{{csrf_token()}}", $element);
            llenaInstitucionesCat("{{url('Home2017/obtieneInstituciones')}}", "{{csrf_token()}}", $element);
        });
    </script>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection
