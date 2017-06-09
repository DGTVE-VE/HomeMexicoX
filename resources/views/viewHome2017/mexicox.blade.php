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
  
<div class="barraGuia col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12" >        
        <h3 class="">CURSOS</h3>
    </div>      
    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
        <h3  id="clasificacion">Recientes</h3>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" id="selectInstitucion" style="padding-top:10px; padding-bottom:5px;"></div>
</div>
<!--    <div class="col-md-12">
        <article>
            <button type="button" class="close" style="color: red;">&times</button><br>
            <h5 class="text-justify">Si deseas realizar tu servicio social o prácticas profesionales de forma presencial, MéxicoX es el lugar para ti.
                Necesitamos personas proactivas, con entusiasmo y ganas de formar parte de un gran equipo.
            </h5>
            <h5 class="text-center">Para mayores Informes puedes consultar <a class="linkcolor" href="http://mx.mexicox.gob.mx/donate">  Informes Servicio Social</a></h5>
        </article>
    </div>-->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="contenedorCursos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </div>

    <!--div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="col-lg 12 col-md-12 col-sm-12 col-xs-12" style="padding:30px;"></div>
        <!--Tutoriales-->
        <!--div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tutoriales</h3>
            </div>   
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1">
                        <div class="col-xs-10">
                            Tutorial 1
                        </div>
                        <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                    </div>
                    <div id="detail-1">
                        <hr></hr>
                        <div class="container">
                            <div class="fluid-row">
                                <iframe src="https://embed.ted.com/talks/rita_pierson_every_kid_needs_a_champion" width="300" height="220" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row toggle" id="dropdown-detail-2" data-toggle="detail-2">
                        <div class="col-xs-10">
                            Tutorial 2
                        </div>
                        <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                    </div>
                    <div id="detail-2">
                        <hr></hr>
                        <div class="container">
                            <div class="fluid-row">
                                <iframe src="https://embed.ted.com/talks/rita_pierson_every_kid_needs_a_champion" width="300" height="220" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row toggle" id="dropdown-detail-3" data-toggle="detail-3">
                        <div class="col-xs-10">
                            Tutorial 3
                        </div>
                        <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                    </div>
                    <div id="detail-3">
                        <hr></hr>
                        <div class="container">
                            <div class="fluid-row">
                                <iframe src="https://embed.ted.com/talks/rita_pierson_every_kid_needs_a_champion" width="300" height="220" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div-->
        <!--Video Promocional-->
        <!--div class="fb-video" data-href="https://www.facebook.com/TvEducativaMx/videos/1457472757644895/" data-width="420" data-show-text="false"><blockquote cite="https://www.facebook.com/TvEducativaMx/videos/1457472757644895/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TvEducativaMx/videos/1457472757644895/">
            ¿Quiénes somos?</a><p>¿Conoces todos nuestros servicios educativos? Somos la #SeñalDeConocimiento http://www.televisioneducativa.gob.mx/</p>
            Posted by <a href="https://www.facebook.com/TvEducativaMx/">Televisión Educativa Mx</a> el viernes, 19 de mayo de 2017</blockquote></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:40px;"></div>
            <!--FB. Me gusta-->
            <!--div class="fb-like" data-href="https://www.facebook.com/TvEducativaMx/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
            <!--FB. Compartir-->
            <!--div class="fb-share-button" data-href="http://mexicox.gob.mx/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmexicox.gob.mx%2F&amp;src=sdkpreparse">Compartir</a></div-->
            <!--div class="fb-share-button" data-href="http://mexicox.gob.mx/" data-layout="button_count"></div>
    </div-->
    
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
</div>
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
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
    $(document).ready(function () {
        $('[id^=detail-]').hide();
        $('.toggle').click(function () {
            $input = $(this);
            $target = $('#' + $input.attr('data-toggle'));
            $target.slideToggle();
        });
    });


//        $("#modalInf").modal("show");
//        $("article").slideToggle("slow");

//    $('.close').click(function () {
//        $("article").slideToggle("slow");
//    });

</script>
@endsection
@section('pieMexicoX')
@include('viewHome2017.pieMexicoX')
@endsection
