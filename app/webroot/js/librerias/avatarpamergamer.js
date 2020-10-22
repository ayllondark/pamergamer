$(document).ready(function() {



});



$(".elboton").click(function() {

    ListaAvatar2();
});


function ListaAvatar2() {

    sChargeData();
    $(".gallery").html('');

    var sexo = $('input:radio[name=drone]:checked').val();

    var aParam = '{"sexo":"' + sexo + '"}';

    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/4";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;


                $.each(datos, function(index, value) {
                    //$(".category").html(datos[index].cod); console.log(datos[index].cod);
                    var idpersonaje = datos[index].id;
                    var imagen = datos[index].imagen;

                    $(".gallery").append('<li class="btnavatar" id="' + idpersonaje + '" style="position: relative; float: left; width: 130px; height: 130px; margin: 5px; padding: 5px; z-index: 0;">' +
                        '<img style="border-radius: 1em; background-color: #363f46; width: 130px; height: 130px; padding: 5px; position: absolute; left: 0; top: 0;" src="../app/webroot/img/pamergamer/avatars/' + imagen + '">' +
                        '</li>');



                });
                fChargeData();

                $(".btnavatar").click(function() {
                    var suid = this.id;
                    $("#suavatar").html(suid);
                    console.log(suid);

                    $(".gallery").hide();
                    $("#entrada").hide();
                    $("#tituloavatar").hide();
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
    $(".gallery").html("");
});



$("#regresar").click(function() {
    $(".gallery").hide();
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
    var strUrl = "mantto/1";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;

                fChargeData();
                setTimeout("location.href='cursospamergamer'", 1000);

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