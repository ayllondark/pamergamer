$(document).ready(function() {


    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    var semana = getParameterByName('sem');
    $("#semanaexamen").html(semana);
    var codcurso = getParameterByName('curid');
    $("#cursoexamen").html(codcurso);

    ListaResultados();






});


/* start musica */
/*
var audio = new Audio();
audio.src = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/retrogameloop.mp3';
// when the sound has been loaded, execute your code
audio.oncanplaythrough = (event) => {
        var playedPromise = audio.play();
        if (playedPromise) {
            playedPromise.catch((e) => {
                console.log(e)
                if (e.name === 'NotAllowedError' || e.name === 'NotSupportedError') {
                    console.log(e.name);
                }
            }).then(() => {
                console.log("playing sound !!!");
            });
        }
    } */
/* end musica */



function ListaResultados() {

    $("#cards").html('');
    //alert($(this).attr('data-semana'));
    var semana = $("#semanaexamen").html();
    var codcurso = $("#cursoexamen").html();
    console.log(semana + ' ' + codcurso);
    //var grado = 292;

    var aParam = '{"semana":"' + $("#semanaexamen").html() + '","curso":"' + $("#cursoexamen").html() + '"}';
    console.log(aParam);
    // aParam = '{"grado":"' + isNull($("#txtSolicitud").val()) + '"}';
    // console.log(aParam);
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/3";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;

                //$('<script>alert("hi");</' + 'script>').appendTo(document.body);

                $.each(datos, function(index, value) {
                    //$(".category").html(datos[index].cod); console.log(datos[index].cod);
                    var nropregunta = datos[index].id;
                    $('#nropregunta').html(nropregunta);
                    var puntos = datos[index].puntos;
                    var puntotot = datos[index].punttot;
                    var correctas = datos[index].correctas;
                    var incorrectas = datos[index].incorrectas;
                    var totpreguntas = datos[index].totalpreguntas;
                    var nomcurso = (datos[index].nomcurso).toUpperCase();
                    var nomgrado = (datos[index].grado).toUpperCase();
                    var semana = (datos[index].semana);

                    $('#puntaje').html('OBTUVISTES ' + puntos + ' PTS');
                    $('#puntaje2').html(puntos);
                    $('#puntajetot').html(puntotot);
                    $('#correctas').html(correctas);
                    $('#incorrectas').html(incorrectas);
                    $('#totalpreguntas').html(totpreguntas);
                    $('#curso').html(nomcurso);
                    $('#grado').html(nomgrado);
                    $('#semana').html(semana);

                    if (puntos == puntotot) {
                        $('#titmensa').html('!FELICIDADES¡');
                        $('#subtitmensa').html('SUPERASTE EL RETO PAMER');
                    } else {
                        $('#titmensa').html('!SIGUE INTENTANDO!');
                        $('#subtitmensa').html('NO TE RINDAS, SE QUE LA SIGUIENTE VEZ LO LOGRARAS ;)');
                    }

                    $('.barralec').html('<span style="width: ' + (puntos / puntotot) * 100 + '%"></span>' +
                        '<p class="text-center pordesa">Obtuviste el ' + ((puntos / puntotot) * 100).toFixed() + '% del desafío</p>' +
                        '</div>');

                });

            } else {
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
                $("#cards").append(data.data);
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });


};



///////////////////////////
/*$('.btn').click(function() {
    $('.btn').removeClass('active').addClass('inactive');
    $(this).removeClass('inactive').addClass('active');
});*/





function htmlEscape(str) {
    return str
        .replace(/&/g, '&amp;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;')
        .replace(/\n/g, '<br>')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;');
}