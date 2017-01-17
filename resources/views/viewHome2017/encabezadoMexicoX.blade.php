<style>
    .barra{background: white; }   
    .btnmorado{
        font-weight: bold;
        border-radius: 108px 108px 108px 108px;
        -moz-border-radius: 108px 108px 108px 108px;
        -webkit-border-radius: 108px 108px 108px 108px;
        background: #34294f !important;
        color: white;
        margin-top: 7px;
        padding:10px 20px 10px 20px;}
    .btnverde{
        font-weight: bold;
        border-radius: 108px 108px 108px 108px;
        -moz-border-radius: 108px 108px 108px 108px;
        -webkit-border-radius: 108px 108px 108px 108px;
        background: #06BB3A !important;
        color: white;
        margin-top: 7px;
        padding:10px 20px 10px 20px;
    }
    .btnverde:hover{background: #05CB3D !important;}
    .btnmorado:hover{background: #503F7C !important;}
    .buscar{margin-top: 7px;}
    .dropdown-menu > li > a:hover {
        background-color: #503F7C;
        color: white;
    }   
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:focus,
    .navbar-default .navbar-nav > .open > a:hover {
        background: white !important;
    }
	.logoPrincipal{
		margin-left:10px;
	}
</style>
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
    <div id="navbar" class="collapse navbar-collapse pull-right">
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
                            <button class="btn btn-default" onclick="busquedaCurso()"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </div>
            </li>            
        </ul>
    </div><!--/.nav-collapse -->
</nav>
<script>
	$('#termino').keypress(function(e) {
		if(e.which == 13) {
			busquedaCurso();
		}
	});
	function busquedaCurso(){
		variable = $('#termino').val();
		$.ajax({
			method: "POST",
			url: "{{url('Home2017/buscaCurso')}}",
			data: {
				termino: variable,
				_token: "{{csrf_token()}}"
			},
			error: function (ts) {
				console.log(ts.responseText);
			}
		})
		.done(function (msg) {
			$("#contenedorCursos").empty(msg);
			$("#contenedorCursos").append(msg);
			$("#clasificacion").empty();
			$("#clasificacion").append('Resultado de la busqueda');
			$("#selectInstitucion").empty();
		});
	}
</script>