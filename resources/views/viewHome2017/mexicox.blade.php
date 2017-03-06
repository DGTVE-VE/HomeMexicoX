@section('titleMexicoX')
MéxicoX
@stop
@extends('home2017')
@section('menuMexicoX')
@include('viewHome2017.encabezadoMexicoX')
@endsection
@section('cuerpoMexicoX')
<!--<div class="modal fade" id="modalInf" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header text-info">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="text-center">¡Aviso Importante!</h3>
     </div>
         <div class="modal-body">
             <h4 class="text-justify">MéxicoX no colabora ni participa de ninguna manera con el formulario:</h4>
            <img  src="img/movo.png" class="img-responsive center-block" style="width: 350px; height: 430px;">            
            <h6 class="text-justify">La cual es una página apócrifa que está recolectando datos de usuarios SIN NUESTRO CONSENTIMIENTO.
Por favor NO ingreses tus datos a esa página ya que no nos hacemos responsables del uso que el usuario que creó ese formulario haga de ellos.
Para tomar cursos en la plataforma de México X sólo tienes que registrarte en: 
mx.mexicox.gob.mx/register</h6>
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
     </div>
      </div>
   </div>
</div>-->
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
<!--<script>
   $(document).ready(function()
   {
      $("#modalInf").modal("show");
   });
</script>-->
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection
