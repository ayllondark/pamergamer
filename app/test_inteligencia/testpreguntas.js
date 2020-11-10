$(document).ready(function() {



    /* var pregunta = 1;
     $("#numpreg").html(pregunta); */
    $("#btnFinalizar").hide();
    ListaPreguntas();

});



/* start fecha examen */
var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
var f = new Date();

/* end fecha examen */

function ListaPreguntas() {


    //alert($(this).attr('data-semana'));
    var pregunta = $("#numpreg").html();

    var aParam = '{"idpregunta":"' + pregunta + '"}';
    console.log(aParam);
    // aParam = '{"grado":"' + isNull($("#txtSolicitud").val()) + '"}';
    // console.log(aParam);
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/26";
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
                    //var aumenta = nropregunta + 1;
                    var codigointe = datos[index].codinte;
                    var nombreinte = datos[index].nombretipo;
                    var codpregunta = datos[index].codpreg;
                    var nombrepregunta = datos[index].nompregunta;

                    $('#Nropregunta').html(codpregunta + '/80');
                    $('#nominte').html(nombreinte);
                    $('#pregunta').html(nombrepregunta);



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



$("#btnSiguiente").click(function() {

    $(this).attr('disabled', true);
    //alert($(this).attr('data-semana'));
    var pregunta = $("#numpreg").html();
    //var inteligencia =  $('#numinteli').html();

    pregunta++;

    var aParam = '{"idpregunta":"' + pregunta + '", "idalternativa":"' + pregunta + '"}';
    //console.log('nueva preg ' + nuevapreg);
    // aParam = '{"grado":"' + isNull($("#txtSolicitud").val()) + '"}';
    console.log(aParam);
    aParam = segenNegocios(aParam);

    var datosOK = "";
    var strUrl = "getdatos/26";
    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            console.log(datosOK);
            if (datosOK == "OK") {

                var datos = data.data;

                $('#btnSiguiente').attr('disabled', false);

                $.each(datos, function(index, value) {
                    //$(".category").html(datos[index].cod); console.log(datos[index].cod);
                    var nropregunta = datos[index].id;
                    //$("#numpreg").html(pregunta);
                    //var aumenta = nropregunta + 1;
                    var codigointe = datos[index].codinte;
                    var nombreinte = datos[index].nombretipo;
                    var codpregunta = datos[index].codpreg;
                    var nombrepregunta = datos[index].nompregunta;

                    $('#Nropregunta').html(codpregunta + '/80');
                    $('#nominte').html(nombreinte);
                    $('#pregunta').html(nombrepregunta);


                });

                $("#numpreg").html(pregunta);
                GrabarPregunta();

            } else {
                viewMessage("divMessage", "Alerta", data.data, "danger", "ban");
                $("#btnSiguiente").hide();
                $("#btnFinalizar").show();

                setTimeout("location.href='testresultados'", 1000);
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            viewMessage("Mensaje", "Alerta", errorThrown + " " + jqXHR + " Error al leer encuesta", "warning", "warning");
        })
        .always(function() {
            reLogin(datosOK);
        });


});



function GrabarPregunta() {

    var preginte = $('#numpreg').html();
    var alterna = $('#valor').val();
    var marca = "";
    if (alterna == 0) {
        marca = 'Nunca';
    }
    if (alterna == 20) {
        marca = 'Pocas veces';
    }
    if (alterna == 40) {
        marca = 'Algunas veces';
    }
    if (alterna == 60) {
        marca = 'Frecuentemente';
    }
    if (alterna == 80) {
        marca = 'Siempre';
    }

    var strUrl = "mantto/124";

    var aParam = '{"idpregunta":"' + (preginte - 1) + '", "idalternativa":"' + marca + '"}';
    var datosOK = "";
    console.log("preg uno " + aParam);
    aParam = segenNegocios(aParam);

    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            datosOK = data.message.toUpperCase();
            //alert(datosOK);
            if (datosOK == "OK") {

                var datos = data.data;


                $("#encuesta").html(data.data);
                $(".titlea").hide();
                //$("#divMessage").show();
                $("#mensageg").show();
                $('#mensageg').html('Datos Guardados Correctamente');
                $('#formlectura').hide();

                setTimeout(function() {
                    $("#mensageg").fadeOut(400);
                }, 6000);

                // setTimeout("location.href='resultadospamergamer?sem=" + rsem + "&curid=" + rcurso + " '", 1000);

            } else {
                $(".box-title").show();
                $('#message').html('Error al Grabar los datos');
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

