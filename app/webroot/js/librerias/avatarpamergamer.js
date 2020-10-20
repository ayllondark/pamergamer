$(document).ready(function() {



});



$(".elboton").click(function() {

    ListaAvatar2();
});


function ListaAvatar2() {

    sChargeData();
    $("#cards").html('');
    //alert($(this).attr('data-semana'));
    var sexo = $('input:radio[name=drone]:checked').val();

    var aParam = '{"sexo":"' + sexo + '"}';
    // aParam = '{"grado":"' + isNull($("#txtSolicitud").val()) + '"}';
    // console.log(aParam);
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/4";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            // console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;
                //console.log(data.data);

                //$('<script>alert("hi");</' + 'script>').appendTo(document.body);

                $.each(datos, function(index, value) {
                    //$(".category").html(datos[index].cod); console.log(datos[index].cod);
                    var idpersonaje = datos[index].id;
                    var nompersonaje = datos[index].nombre;
                    var imagen = datos[index].imagen;
                    console.log(nompersonaje);

                    $(".container-avatar").append('<div class="col-lg-4 col-md-4 col-xs-12 col-centered" id="avatares">' +
                        '<div class="clash-card barbarian">' +
                        '<div class="clash-card__image clash-card__image--barbarian">' +
                        '<!--<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/barbarian.png" alt="barbarian" />-->' +
                        '<img src="../app/webroot/assets_ace/images/lectogamer/avatars/' + imagen + '" alt="barbarian" />' +
                        '</div>' +

                        '<div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">' +
                        '<div class="one-third">' +
                        '<button class="btn btn-sm btn-success btnavatar" id="' + idpersonaje + '"> Seleccionar</button>' +
                        '</div>' +

                        '</div>' +

                        '</div>' +
                        '</div>');

                });
                fChargeData();

                $(".btnavatar").click(function() {
                    var suid = this.id;
                    $("#suavatar").html(suid);
                    console.log(suid);

                    $(".container-avatar").hide();
                    $("#entrada").hide();
                    $("#nick").show();
                    $("#regresar").show();

                });


            } else {
                fChargeData();
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



$("input[name=drone]").change(function() {
    //alert($(this).val());
    $(".container-avatar").html("");
});



$("#regresar").click(function() {
    $(".container-avatar").hide();
    $("#entrada").hide();
    $("#nick").hide();
    $("#regresar").hide();

});


$("#btnRegistrar").click(function() {

    sChargeData();

    var rta1 = $("#txtnick").val();

    if (rta1.length < 1) {
        $('#message').show();
        $('#message').text("Por favor ingrese su Nick.");
        setTimeout(function() {
            $("#message").fadeOut(400);
        }, 6000);
        return;
    }

    var nick = $("#txtnick").val();
    $("#sunick").html(nick);
    // setTimeout("location.href='atencionincidencias'", 1000);

    var aParam = '{"personaje": ' + isNull($("#suavatar").html()) + ', "nick":"' + isNull($("#sunick").html()) + '" }';
    console.log(aParam);
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "mantto/2";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;

                fChargeData();
                setTimeout("location.href='lectogamer'", 1000);

            } else {
                fChargeData();
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });

});




















/*
 * Inicio de Carga de datos
 */
function sChargeData() {
    // $('#divMessage').hide(0);
    // $('#divMessage').html('');
    $('#loadingReporte').show();
    $('#btnProcesar').attr('disabled', 'disabled');
    $('#btnExcel').hide(0);
    $('#cmbSede').attr('disabled', 'disabled');
    // $("#editAlumno").hide();
}

/*
 * Fin de Carga de datos
 */
function fChargeData() {
    $('#loadingReporte').hide(5);
    $('#btnProcesar').removeAttr('disabled');
    $('#cmbSede').removeAttr('disabled');
    // $("#editAlumno").show();
    // $(".loader").fadeOut("slow");
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