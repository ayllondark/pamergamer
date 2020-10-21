$(document).ready(function() {

    llenaPerfil()
    llenaGrados();
    //listaAluDestacados();
    //llenaLectura();
    //ListaPreguntas();


});

/* end Audio */

/* function imgError(image) {
    image.src = "images/default.png";
    //$( this ).hide();
} */


function llenaGrados() {

    // data-semana

    // aParam = '{"grado":"' + isNull($("#txtSolicitud").val()) + '"}';
    // console.log(aParam);

    var codigo = $("#codgrupo").html();
    var strUrl = "getdatos/6";
    var aParam = '{}';
    aParam = segenNegocios(aParam);
    var datosOK = "";

    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);

            datosOK = data.message.toUpperCase();
            console.log("grupo222 " + datosOK);
            if (datosOK == "OK") {
                var datos = data.data;
                // console.log(datos);
                // console.log(data.data);

                $.each(datos, function(index, value) {
                    //$(".category").html(datos[index].cod); console.log(datos[index].cod);
                    var codigo = datos[index].cod;
                    $("#codgrupo").html(codigo);

                    //$('#cmbMotivo').append('<option value="' + datos[index].id + '">' + datos[index].motivo + '</option>');
                });

            } else {
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });

}



$(".nav-item").click(function() {

    $("#cards").html('');
    //alert($(this).attr('data-semana'));
    var semana = $(this).attr('data-semana');
    $("#semanaexamen").html(semana);

    var aParam = '{"grado":' + $("#codgrupo").html() + ', "semana":' + semana + '}';
    // aParam = '{"grado":"' + isNull($("#txtSolicitud").val()) + '"}';
    console.log(aParam);
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/1";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            // console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;
                //console.log(data.data);
                   
                var html= '';
                $.each(datos, function(index, value) {
                    //$(".category").html(datos[index].cod); console.log(datos[index].cod);
                    var codcurso = datos[index].idcurso;
                    var nomcurso = datos[index].nomcurso;
                    var imgcurso = datos[index].imgcurso;
                    var fecha = datos[index].jfecha;
                    var puntosobtenidos = datos[index].jnota;
                    var puntajecurso = datos[index].jpuntaje;


                    //$(".container").append('<div id="'+datos[index].id+'">'+prueba+'</div>');

                      html+=  '<div class="column col-xs-12 col-sm-12 col-md-4" id="' + datos[index].id + '">' +
                        '<div class="post-module">' +
                        '<div class="thumbnail">' +
                        '<img src="../img/evaonline/' + imgcurso + '"/>' +
                        '</div>' +
                        '<div class="post-content">' +
                        '<div class="category">' + nomcurso + ' <!--' + codcurso + '--></div>' +
                        '<h2 class="sub_title">' + puntajecurso + ' pts.</h2>' +
                        '<div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i> Puntaje obtenido: ' + puntosobtenidos + '<br> <strong class="escudocurso"><img class="icoavatar" src="../app/webroot/img/pamergamer/escudo.svg" alt=""></strong></span>' +
                        '<p class="text-center"><button class="btn entrar" data-cod="' + codcurso + '" data-sem="' + semana + '">RENDIR</button></p></div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="barralec"><span style="width: ' + (puntosobtenidos / puntajecurso) * 100 + '%"></span>' +
                        '</div>' +
                        '<p class="text-center pordesa">Obtuviste el ' + (puntosobtenidos / puntajecurso) * 100 + '% del desafío</p>' +
                        '</div>';




                    //$('#cmbMotivo').append('<option value="' + datos[index].id + '">' + datos[index].motivo + '</option>');
                });

                $("#cards").html(html);
                /* ------------------------------------------------------------ */
                $(".entrar").click(function() {

                    //$("#cards").html('');
                    var ccurso = $(this).attr('data-cod');
                    //$("#codlectura").html(tipolectura);
                    var csem = $(this).attr('data-sem');

                    setTimeout("location.href='examenpamergamer?sem=" + csem + "&curid=" + ccurso + " '", 2000);

                });

            } else {
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
                Swal.fire({
                    icon: 'info',
                    title: 'Oops...',
                    text: data.data
                  
                  })
                //$("#cards").append(data.data);
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });


});


function llenaPerfil() {

    var aParam = '{}';
    // aParam = '{"grado":"' + isNull($("#txtSolicitud").val()) + '"}';
    // console.log(aParam);
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/2";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;
                // console.log(datos);
                // console.log(data.data);

                $.each(datos, function(index, value) {
                    //$(".category").html(datos[index].cod); console.log(datos[index].cod);
                    var nick = datos[index].nick;
                    var personaje = datos[index].personaje;
                    var notaperfil = datos[index].notalec;
                    var avataralu = datos[index].imagen;
                    //<span style="width: 25%"></span>
                    $("#nivel").html('GRADO: <span style="color: #ffc107; font-size: 1.2em;">' + personaje + '</span>');
                    $("#nick").html('NICK: <span style="color: #ffc107; font-size: 1.2em;">' + nick + '</span>');

                    $("#armadura").html('<img class="armadura" src="../app/webroot/assets_ace/images/lectogamer/avatars/' + avataralu + '" alt="">')
                    $("#nota").html('<img class="icoavatar" src="../app/webroot/img/pamergamer/escudo.svg" alt=""> ' + notaperfil);

                    $("#totmedallas").html('<img class="icoavatar" src="../app/webroot/img/pamergamer/escudo.svg" alt=""> ' + notaperfil / 100);

                    //$('#cmbMotivo').append('<option value="' + datos[index].id + '">' + datos[index].motivo + '</option>');
                });

            } else {
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });

}

function BloqueoExamen() {

    // var aParam = '{}';
    var aParam = '{"idlectura":"' + $("#codlectura").html() + '"}';
    // console.log(aParam);
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/12";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            //alert(datosOK);
            if (datosOK == "OK") {
                //var datos = data.data;
                // console.log("imagenes destacados "+data.data);
                // console.log(data.data);
                $("#evaluacion").attr('disabled', true);
            } else {
                $("#evaluacion").attr('disabled', false);
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });

}


function htmlEscape(str) {
    return str
        .replace(/&/g, '&amp;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;')
        .replace(/\n/g, '<br>')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;');
}