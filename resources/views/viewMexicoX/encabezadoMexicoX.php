<div class = "row">
    <div class = "col-md-3">
        <a href="http://mx.televisioneducativa.gob.mx/"><img src="{{url('img/logo.png')}}"></a>
    </div>
    <div class = "col-md-3 padding-superior">
        <a href="http://mx.televisioneducativa.gob.mx/register?next=%2Fdashboard"><p class = "text-left">REGISTRARSE</p></a>
    </div>
    <div class="col-md-3 padding-superior">
        <div class="input-group">

            <form action="{{url('busca')}}" method="POST">
                <input name="termino" type="text" class="form-control" placeholder="Quiero aprender de...">
                <span class="input-group-btn boton-busca">
                    <button class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </span>
            </form>
        </div><!-- /input-group -->
    </div>
    <div class = "col-md-3 padding-superior">
        <a href="http://mx.televisioneducativa.gob.mx/login"><img class = "pull-right" src="{{url ('img/boton_inicio_sesion.png') }}"></a>
    </div>
</div>