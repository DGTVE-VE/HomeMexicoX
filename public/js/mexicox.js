    function llenaCursos(urlFiltroCursos, csrfTok){
        $.ajax({
            method: "POST",
            url: urlFiltroCursos,
            data: {
                _token: csrfTok
            },
            error: function (ts) {
                console.log(ts.responseText);
            }
        })
        .done(function (msg) {
            $("#contenedorCursos").append(msg)
        });
    }
    
    function llenaInstituciones(urlLlenaInstitucion, csrfTok){
        $.ajax({
            method: "POST",
            url: urlLlenaInstitucion,
            data: {
                _token: csrfTok
            },
            error: function (ts) {
                console.log(ts.responseText);
            }
        })
        .done(function (msg) {
            $("#selectInstitucion").empty();
            $("#selectInstitucion").append(msg);
        });
    }
    
    function llenaCursosCategoria(urlfiltraCursoCat, csrfTok, $element){
        $.ajax({
            method: "POST",
            url: urlfiltraCursoCat + "/" + $element.attr('value'),
            data: {
                _token: csrfTok
            },
            error: function (ts) {
                console.log(ts.responseText);
            }
        })
        .done(function (msg) {
            $("#clasificacion").empty();
            $("#clasificacion").append($element.html());
            $("#contenedorCursos").empty();
            $("#contenedorCursos").append(msg);
        });
    }
    
    function llenaInstitucionesCat(urlLlenaInstitucionCat, csrfTok, $element){
        $.ajax({
            method: "POST",
            url: urlLlenaInstitucionCat + "/" + $element.attr('value'),
            data: {
                _token: csrfTok
            },
            error: function (ts) {
                console.log(ts.responseText);
            }
        })
        .done(function (msg) {
            $("#selectInstitucion").empty();
            $("#selectInstitucion").append(msg);
        });
    }