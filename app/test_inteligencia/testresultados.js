$(document).ready(function () {
   
    ListaPreguntas2();
   });






function ListaPreguntas2() {


 
    var datosOK = "";
    var strUrl = "getdatos/27";
    $.post(strUrl, {  }, null, "html")
        .done(function(data, textStatus, jqXHR) {
            data = segdeNegocios(data);
            // console.log(data);

            datosOK = data.message.toUpperCase();
            
            if (datosOK == "OK") {
                var datos = data.data;

                //$('<script>alert("hi");</' + 'script>').appendTo(document.body);
               var html='';
               var color = '';
               var colordefault='';
                $.each(datos, function(index, value) {
                    if (datos[index][0]=="LINGÜISTICA") {
                        color="#febf00";
                    } else  if (datos[index][0]=="LÓGICO-MATEMÁTICA") {
                        color="#fe6600";
                    }else  if (datos[index][0]=="MUSICAL") {
                        color="#974706";
                    }else  if (datos[index][0]=="VISUAL-ESPACIAL") {
                        color="#cffe43";
                    }else  if (datos[index][0]=="CINESTÉSICA-CORPORAL") {
                        color="#00d800";
                    }else  if (datos[index][0]=="INTERPERSONAL") {
                        color="#0096cb";
                    }else  if (datos[index][0]=="INTRAPERSONAL") {
                        color="#2e527c";
                    }else{
                        color="#005700";
                    }
            
                   if (datos[index][1]=='0%' || datos[index][2]=='0%' ||
                    datos[index][3]=='0%' || datos[index][4]=='0%' ||datos[index][5]=='0%') {
                    colordefault='color:#000;margin-left: 5px;font-weight: bold;';
                   }


                  html+= ' <div class="row" style=" padding-bottom: 15px; text-align:left; font-size: 20px"; font-family: ui-serif;">'+
           
                    '<div class="col-md-6 col-md-offset-3" style="padding-left: 35px;" >'+ datos[index][0]+'</div>'+
                
                    '</div>'+
                    ' <div class="row" style=" padding-bottom: 15px; text-align:left; font-size: 20px; font-family: ui-serif;">' +
                   
                    ' <div class="col-md-3 " style="text-align: right;">' +
                     '<div style="margin-bottom: 10px;">Nunca</div>'+
                     '<div style="margin-bottom: 10px;">Pocas veces</div>'+
                     '<div style="margin-bottom: 10px;">Algunas veces</div>'+
                     '<div style="margin-bottom: 10px;">Frecuentemente</div>'+
                     '<div style="margin-bottom: 10px;">Siempre</div>'+
                    '</div>'+

                    ' <div class="col-md-6 " style="padding-left: 35px;">' +
                    '<div class="progress">' +
                    '    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width:'+datos[index][1]+';background-color:'+color+' ">' +
                    '           <span id="cantidad" style="'+colordefault+'">'+datos[index][1]+'</span> ' +
                    '      </div>' +
                    '     </div>' +
                    '<div class="progress">' +
                    '    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width:'+datos[index][2]+';background-color:'+color+' ">' +
                    '           <span id="cantidad" style="'+colordefault+'">'+datos[index][2]+'</span> ' +
                    '      </div>' +
                    '     </div>' +
                    '<div class="progress">' +
                    '    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width:'+datos[index][3]+';background-color:'+color+' ">' +
                    '           <span id="cantidad" style="'+colordefault+'">'+datos[index][3]+'</span> ' +
                    '      </div>' +
                    '     </div>' +

                    '<div class="progress">' +
                    '    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width:'+datos[index][4]+';background-color:'+color+' ">' +
                    '           <span id="cantidad" style="'+colordefault+'">'+datos[index][4]+'</span> ' +
                    '      </div>' +
                    '     </div>' +
                    '<div class="progress">' +
                    '    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width:'+datos[index][5]+';background-color:'+color+' ">' +
                    '           <span id="cantidad" style="'+colordefault+'">'+datos[index][5]+'</span> ' +
                    '      </div>' +
                    '     </div>' +
                    ' </div>' +
                    
                    
                    '  </div>' 

                    //$(".category").html(datos[index].cod); console.log(datos[index].cod);
                   // var nropregunta = datos[index][0];
                    
                     //     console.log(nropregunta);

                });
                    $("#detalle").html(html);

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




