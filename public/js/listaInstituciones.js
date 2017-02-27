    function resaltaOpcion(opcion){
        idOpinst = "#" + opcion;
        $(idOpinst).addClass("opcionOscura");
    }
    function opcionNormal(opcion){
        idOpinst = "#" + opcion;
        $(idOpinst).removeClass("opcionOscura");
    }
    document.getElementById("myBtn").onclick = function() {muestraLista()};
    function muestraLista() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    function cierraLista(){
        setTimeout(function(){ $('#myDropdown').removeClass("show"); },250);
    }
    function ocultaLista(institucion,urlXInstitucion, csrfTok, categoria) {
        $.ajax({
        method: "POST",
                url: urlXInstitucion,
                data: {
                    cat: categoria,
                    imparte: institucion,
                    archivado: "0",
                    _token: csrfTok
                },
                error: function (ts) {
                console.log(ts.responseText);
                $("#contenedorCursos").empty();
                }
        })
        .done(function (msg) {
            $("#clasificacion").empty();
            $("#clasificacion").append('Cursos de: ' + institucion);
            $("#contenedorCursos").empty();
            $("#contenedorCursos").append(msg)
        });
        $.ajax({
        method: "POST",
                url: urlXInstitucion,
                data: {
                    cat: categoria,
                    imparte: institucion,
                    archivado: "1",
                    _token: csrfTok
                },
                error: function (ts) {
                console.log(ts.responseText);
                $("#contenedorCursos").empty();
                }
        })
        .done(function (msg) {
            $("#clasificacionArchivados").empty();
            $("#clasificacionArchivados").append('Cursos de: ' + institucion);
            $("#contenedorCursosArchivados").empty();
            $("#contenedorCursosArchivados").append(msg)
        });
        $('#myDropdown').removeClass("show");
    }