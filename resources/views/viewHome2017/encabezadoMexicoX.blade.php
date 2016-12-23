<style>
    .barra{background: white; height: 8%;}
    .logo{margin-left: 45px;  padding:0 0 0 0;}
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
</style>
<nav class="navbar navbar-default navbar-fixed-top barra">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand logo" href="http://mexicox.gob.mx/"><img class="imglogo" src="img/logo.png"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse pull-right">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    {{--*/ $cont = 1; /*--}}
                    @foreach($categorias as $categoria)
                    <li><a class="ligaCategoria" value="{{$cont}}">{{$categoria->categoria}}</a></li>
                    {{--*/ $cont++; /*--}}
                    @endforeach
                </ul>
            </li>
            <li><input type="button" class="btnmorado" value="Registrate" onclick="window.location.href = 'http://mx.televisioneducativa.gob.mx/register?next=%2Fdashboard'"></li>

            <li><input type="button" class="btnverde" value="Iniciar Sesión" onclick="window.location.href = 'http://mx.televisioneducativa.gob.mx/login'"></li>            
            <li class="buscar">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </li>            
        </ul>
    </div><!--/.nav-collapse -->
</nav>