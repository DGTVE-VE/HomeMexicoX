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
    
    <div class="barraGuia col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12" >
            <h3 class="">Archivados </h3>
        </div>      
        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
            <h3  id="clasificacionArchivados"></h3>
        </div>
        <!--div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" id="selectInstitucion" style="padding-top:10px; padding-bottom:5px;"></div-->
    </div>
    <div id="contenedorCursosArchivados" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </div>
    <script src="{{asset('js/mexicoxInicio.js')}}"></script>
    <script>
        /*   *****  mostrar cursos recientes   *****   */
        llenaCursos("{{url('Home2017/filtroCursos/0/0')}}", "{{csrf_token()}}", 0);
        /*   *****  mostrar cursos archivados   *****   */
        llenaCursos("{{url('Home2017/filtroCursos/0/1')}}", "{{csrf_token()}}", 1);
        /*  *****   Llenar lista de instituciones   *****   */
        llenaInstituciones("{{url('Home2017/obtieneInstituciones/0')}}", "{{csrf_token()}}");
    </script>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection
