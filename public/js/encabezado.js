    function busquedaCurso(urlBuscar, csrfTok){
        variable = $('#termino').val();
        $.ajax({
            method: "POST",
            url: urlBuscar,
            data: {
                termino: variable,
                _token: csrfTok
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