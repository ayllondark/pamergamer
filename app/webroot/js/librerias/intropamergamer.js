$(document).ready(function() {

    CargaPantalla();

});


function CargaPantalla() {

    var aParam = '{}';
    // aParam = '{"grado":"' + isNull($("#txtSolicitud").val()) + '"}';
    // console.log(aParam);
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/5";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            //console.log(data);

            datosOK = data.message.toUpperCase();
            console.log(datosOK);
            if (datosOK == "OK") {
                var datos = data.data;
                //console.log(data.data);
                setTimeout("location.href='cursospamergamer'", 2000);

            } else {
                setTimeout("location.href='avatarpamergamer'", 2000);
                //viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
                //$("#cards").append(data.data);
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });


};