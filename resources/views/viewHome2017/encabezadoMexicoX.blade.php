<nav class="navbar navbar-default navbar-fixed-top morado">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://mx.televisioneducativa.gob.mx/register?next=%2Fdashboard">registrarse</a></li>
                <li><a href="http://mx.televisioneducativa.gob.mx/login">Iniciar Sesión</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Nosotros</a></li>
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
                <div class="col-sm-4 col-md-4">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
