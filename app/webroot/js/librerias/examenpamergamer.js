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

    ListaPreguntas();
});




function ListaPreguntas() {

    $("#cards").html('');
    //alert($(this).attr('data-semana'));
    var semana = $("#semanaexamen").html();
    var codcurso = $("#cursoexamen").html();
    console.log(semana + ' ' + codcurso);
    //var grado = 292;

    var aParam = '{"semana":"' + semana + '","curso":"' + codcurso + '"}';
    console.log(aParam);
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

                //$('<script>alert("hi");</' + 'script>').appendTo(document.body);


                $.each(datos, function(index, value) {
                    //$(".category").html(datos[index].cod); console.log(datos[index].cod);
                    var nropregunta = datos[index].id;
                    $('#nropregunta').html(nropregunta);
                    var pregunta = datos[index].preguntaimg;
                    var alternativa1 = datos[index].alterna1;
                    var alternativa2 = datos[index].alterna2;
                    var alternativa3 = datos[index].alterna3;
                    var alternativa4 = datos[index].alterna4;



                    /*  <div class="row">
                              <img src="img/orlando.png" class=" img-responsive" alt="" style="padding: 20px;border-radius: 2em; width: 100%; height: 350PX;">
                          </div>
                            <div class="row" style=" padding-bottom: 10PX;">
                              <div class="radio-toolbar">
                                          <div class="col-xs-12 col-sm-12 col-md-2"></div>
                                          <div class="col-xs-6 col-sm-6 col-md-2">                                     
                                                  <input type="radio" id="A" name="radioFruit" value="apple" >
                                                  <label for="A">A</label>
                                          </div>
                                          <div class="col-xs-6 col-sm-6 col-md-2">
                                                 <input type="radio" id="B" name="radioFruit" value="banana">
                                                  <label for="B">B</label>
                                          </div>
                                          <div class="col-xs-6 col-sm-6 col-md-2">
                                                  <input type="radio" id="C" name="radioFruit" value="orange">
                                                  <label for="C">C</label> 
                                          </div>
                                          <div class="col-xs-6 col-sm-6 col-md-2">
                                                  <input type="radio" id="D" name="radioFruit" value="FF">
                                                  <label for="D">D</label> 
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-2"></div>
                                    </div>                        
                            </div>*/



                    $("#imagenpregunta").append('<div class="row">' +
                        '<img src="../img/pamergamer/preguntas/' + pregunta + '" class=" img-responsive" alt="" style="padding: 20px;border-radius: 2em; width: 100%; height: 350PX;">' +
                        '</div>' +
                        '<div class="row" style=" padding-bottom: 10PX;">' +
                        '<div class="radio-toolbar">' +
                        '<div class="col-xs-12 col-sm-12 col-md-2"></div>' +
                        '<div class="col-xs-6 col-sm-6 col-md-2">' +
                        '<input type="radio" name="color' + nropregunta + '" value="' + alternativa1 + '" /> <label style="padding-right: 35px;"> ' + alternativa1 + ' </label>' +
                        '</div>' +
                        '<div class="col-xs-6 col-sm-6 col-md-2">' +
                        '<input type="radio" name="color' + nropregunta + '" value="' + alternativa2 + '" /> <label style="padding-right: 35px;"> ' + alternativa2 + ' </label>' +
                        '</div>' +
                        '<div class="col-xs-6 col-sm-6 col-md-2">' +
                        '<input type="radio" name="color' + nropregunta + '" value="' + alternativa3 + '" /> <label style="padding-right: 35px;"> ' + alternativa3 + ' </label>' +
                        '</div>' +
                        '<div class="col-xs-6 col-sm-6 col-md-2">' +
                        '<input type="radio" name="color' + nropregunta + '" value="' + alternativa4 + '" /> <label style="padding-right: 35px;"> ' + alternativa4 + ' </label>' +
                        '</div>' +
                        '</div>' +
                        '</div>');

                });

                $(".btnavatar").click(function() {
                    var suid = this.id;
                    $("#suavatar").html(suid);
                    console.log(suid);

                    $(".container-avatar").hide();
                    $("#nick").show();

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





$("#btnGuardar").click(function() {

    var rpta1 = $('input:radio[name=color1]:checked').val();
    var rpta2 = $('input:radio[name=color2]:checked').val();
    var rpta3 = $('input:radio[name=color3]:checked').val();
    var rpta4 = $('input:radio[name=color4]:checked').val();


    var rcurso = $("#cursoexamen").html();
    var rsem = $("#semanaexamen").html();


    var strUrl = "mantto/3";

    // $("#cuadroreq").text();
    var aParam = '{"curso":"' + $("#cursoexamen").html() + '","semana":"' + $("#semanaexamen").html() + '","preg1":"' + rpta1 + '","preg2":"' + rpta2 + '","preg3":"' + rpta3 + '","preg4":"' + rpta4 + '"}';
    var datosOK = "";
    console.log(aParam);
    aParam = segenNegocios(aParam);

    $.post(strUrl, { "objJSON": aParam }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            datosOK = data.message.toUpperCase();
            // alert(datosOK);
            if (datosOK = "OK") {

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

                setTimeout("location.href='resultadospamergamer?sem=" + rsem + "&curid=" + rcurso + " '", 2000);

                //$("#espaciador").show();
                $("#txttitulo").val('');
                $("#txtdescripcion").val('');
                $("#txtpuntaje").val('');

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


});



/* LIMPIA INPUT */
function cleanInput() {

    $("#fechaIni").val('');
    $("#fechaFin").val('');
    $("#fechaRecupera").val('');
    $("#horaIni").val('');
    $("#horaFin").val('');
    $("#horaTotal").val('');
    // $("#cmbMotivo").val('');
    // $("#chkDescuento").attr('checked', false);
    // $("#txtAdjunto").val('');
    $("#txtJustificacion").val('');
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