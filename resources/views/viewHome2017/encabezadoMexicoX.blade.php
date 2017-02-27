<link rel="stylesheet" href="{{asset('css/encabezado.css')}}"/>
    {{--*/ $urlBusuqeda = url('Home2017/buscaCurso') /*--}}
<nav class="navbar navbar-default navbar-fixed-top barra">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="http://mexicox.gob.mx/"><img class="img-responsive logoPrincipal" src="img/logo.png"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse esquinaDerecha">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos <span class="caret"></span></a>
                <ul class="dropdown-menu">
					<li><a class="ligaCategoria" value="0">Recientes</a></li>
					<li><hr style="color: #0056b2;" /></li>
					{{--*/ $cont = 1; /*--}}
                    @foreach($categorias as $categoria)
                    <li><a class="ligaCategoria" value="{{$categoria->id}}">{{$categoria->categoria}}</a></li>
                    {{--*/ $cont++; /*--}}
                    @endforeach
                </ul>
            </li>
            <li><input type="button" class="btnmorado" value="Registrate" onclick="window.location.href = 'http://mx.mexicox.gob.mx/register?next=%2Fdashboard'"></li>

            <li><input type="button" class="btnverde" value="Iniciar Sesión" onclick="window.location.href = 'http://mx.mexicox.gob.mx/login'"></li>            
            <li class="buscar">
                <div class="navbar-form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Busqueda por curso" id="termino">
                         {{ csrf_field() }}
                        <div class="input-group-btn">
                            <button class="btn btn-default" onclick="busquedaCurso('{{$urlBusuqeda}}', '{{csrf_token()}}')"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </div>
            </li>            
        </ul>
    </div><!--/.nav-collapse -->
</nav>
<script src="{{asset('js/encabeza2.js')}}"></script>
<script>
    $('#termino').keypress(function(e) {
        if(e.which == 13) {
            busquedaCurso("{{$urlBusuqeda}}", "{{csrf_token()}}");
        }
    });
    $(document).on('click', 'a.ligaCategoria', function () {
        var $element = $(this);
        /*   *****  mostrar cursos recientes   *****   */
        llenaCursosCategoria("{{url('Home2017/filtroCursos')}}", "{{csrf_token()}}", $element, 0);
        /*   *****  mostrar cursos archivados   *****   */
        llenaCursosCategoria("{{url('Home2017/filtroCursos')}}", "{{csrf_token()}}", $element, 1);
        /*  *****   Llenar lista de instituciones   *****   */
        llenaInstitucionesCat("{{url('Home2017/obtieneInstituciones')}}", "{{csrf_token()}}", $element);
    });
</script>