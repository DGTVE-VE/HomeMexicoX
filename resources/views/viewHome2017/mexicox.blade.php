@section('titleMexicoX')
MéxicoX
@stop
@extends('home2017')
@section('menuMexicoX')
@include('viewHome2017.encabezadoMexicoX')
@endsection
@section('cuerpoMexicoX')
<div class="modal fade" id="modalInf" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-info" style="background-image: url('img/encabezado.jpg')">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <h2 class="text-center">Servicio Social</h2>
            <div class="modal-body modal-sm"   style="background-image: url('img/fondo1.png'); width: 100%;">            
                <h3 class="text-justify">Si deseas realizar tu servicio social o prácticas profesionales, MéxicoX es el lugar para ti.
                    Necesitamos personas proactivas, con entusiasmo y ganas de formar parte de un gran equipo.
                </h3>
                <h4 class="text-center">Para mayores Informes puedes consultar <a href="http://mx.mexicox.gob.mx/donate">  Informes Servicio Social</a></h4>
            </div>
            <div class="modal-footer"  style="background: url('img/pie.png') no-repeat; width: 100%;">
                <br><br><br><a href="#" data-dismiss="modal" class="btn btn-danger center-block">Cerrar</a><br>
            </div>
        </div>
    </div>
</div>
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
llenaCursos("{{url('Home2017/filtrarCurso/0/0')}}", "{{csrf_token()}}", 0);
/*   *****  mostrar cursos archivados   *****   */
llenaCursos("{{url('Home2017/filtrarCurso/0/1')}}", "{{csrf_token()}}", 1);
/*  *****   Llenar lista de instituciones   *****   */
llenaInstituciones("{{url('Home2017/obtenerInstitucion/0')}}", "{{csrf_token()}}");
</script>
<script>
    $(document).ready(function ()
    {
        $("#modalInf").modal("show");
    });
</script>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection
