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
            <div class="modal-header text-info" style="background-image: url('img/encabezado.jpg')">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <h2 class="text-center">Aviso Importante</h2>
            <div class="modal-body modal-sm">
                <h3 class="text-justify col-md-6">Por razones de mantenimiento la plataforma estará sin servicio el viernes 19 de mayo de 2017. Tome sus precauciones.
                </h3>
                <img class="col-md-6" src="img/mantenimiento.png">
            </div>
            <div class="modal-footer">
                <br><br><br><a href="#" data-dismiss="modal" class="btn btn-danger center-block">Cerrar</a><br>
            </div>
        </div>
    </div>
</div>-->

@include('viewHome2017.banner')
<style>
    .paddingImgTutor{
        padding:40px;
    }
    .marcoImg{
        border:solid 2px;
    }
</style>

<div class="barraGuia col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12" >
        <a href="#tutoriales"><h3>Tutoriales</h3></a>
    </div>
    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12" >
        <h3 class="">CURSOS</h3>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <h3  id="clasificacion">Recientes</h3>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" id="selectInstitucion" style="padding-top:10px; padding-bottom:5px;"></div>
</div>
<!-- <div class="col-md-12"> -->
    <!--
            <article>

                <h5 class="text-justify">
                    <button type="button" class="close" style="color: red;">&times</button><br>
                    Si deseas realizar tu servicio social o prácticas profesionales de forma presencial, MéxicoX es el lugar para ti.
                    Necesitamos personas proactivas, con entusiasmo y ganas de formar parte de un gran equipo.
                </h5>
                <h5 class="text-center">Para mayores Informes puedes consultar <a class="linkcolor" href="http://mx.mexicox.gob.mx/donate">  Informes Servicio Social</a></h5>

            </article>
-->
    <!-- <article>
        <h4>Aviso Importante
        </h4>
        <p style="text-align: justify;">
        Le informamos que debido al éxito que tuvo el curso de
“Prevenir, atender y sancionar el acoso y hostigamiento sexual. ¡Conoce el protocolo!”
la entrega de constancias demorará un poco,  se podrá descargar en las próximas 72 horas
a partir hoy. Le sugerimos estar al pendiente de su cuenta en MéxicoX y de su correo
electrónico ya que le llegará una notificación informando la disponibilidad de la descarga.
            <button class="close" style="color: white;">X</button>
        </p>
    </article> -->
<!-- </div> -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="contenedorCursos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </div>

    <div class="barraGuia col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12" >
            <h3 id="tutoriales" class="">Tutoriales </h3>
        </div>
    </div>
    <div id="contenedorTutoriales" class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 paddingImgTutor">
            <a href="{{url('Home2017/Tutoriales/1')}}" target="_blank"><img src="{{asset('img/thumbnailTutorial/T1.jpg')}}" class="img-responsive marcoImg img-thumbnail img-rounded"/></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 paddingImgTutor">
            <a href="{{url('Home2017/Tutoriales/2')}}" target="_blank"><img src="{{asset('img/thumbnailTutorial/T2.jpg')}}" class="img-responsive marcoImg img-thumbnail img-rounded"/></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 paddingImgTutor">
            <a href="{{url('Home2017/Tutoriales/3')}}" target="_blank"><img src="{{asset('img/thumbnailTutorial/T3.jpg')}}" class="img-responsive marcoImg img-thumbnail img-rounded"/></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 paddingImgTutor">
            <a href="{{url('Home2017/Tutoriales/4')}}" target="_blank"><img src="{{asset('img/thumbnailTutorial/T4.jpg')}}" class="img-responsive marcoImg img-thumbnail img-rounded"/></a>
        </div>
    </div>
</div>
<script src="{{asset('js/mexicoxInicio.js')}}"></script>
<script>
    /*   *****  mostrar cursos recientes   *****   */
    llenaCursos("{{url('Home2017/filtrarCurso/0/0')}}", "{{csrf_token()}}", 0);

    /*  *****   Llenar lista de instituciones   *****   */
    llenaInstituciones("{{url('Home2017/obtenerInstitucion/0')}}", "{{csrf_token()}}");
    
    $(document).ready(function () {
        $('[id^=detail-]').hide();
        $('.toggle').click(function () {
            $input = $(this);
            $target = $('#' + $input.attr('data-toggle'));
            $target.slideToggle();
        });
    });

    $("#modalInf").modal("show");
    $("article").slideToggle("slow");

    $('.close').click(function () {
        $("article").slideToggle("slow");
    });

</script>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection
