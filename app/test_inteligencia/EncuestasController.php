<?php

App::uses('AppController', 'Controller');
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/**
* Description of EncuestasController
*
* @author DesarrolloWeb02
*/
class EncuestasController extends AppController {

    public $uses = array('Usuario');

    /*
    * STAR Encuestas ficha datos
    */

    public function encuesta092020() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Colegios');
        $this->set('subTitPage', '#YoMeQuedoEnCasa');
        $this->set('objJS', '<script src="../js/librerias/encuesta092020.js?2"></script>');
    }
    
    public function encuesta082020() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Colegios');
        $this->set('subTitPage', '#YoMeQuedoEnCasa');
        $this->set('objJS', '<script src="../js/librerias/encuesta082020.min.js?19"></script>');
    }
    
    public function encuesta345() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Encuesta PAMER');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuesta345.min.js?8"></script>');
    }
    
    
    public function encuestafd() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Ficha de Datos');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestafichadatos.min.js?8"></script>');
    }

    public function encuestafdreporte() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Reporte Ficha de Datos');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestafichadatosreporte.min.js?14"></script>');
    }

    public function encuestafdseguimiento() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Seguimiento Ficha de Datos');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">'.
            '<link rel="stylesheet" href="../js/jslibrerias/msjAlert/jnoty.css">');
        $this->set('piePag', '<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>'.
            '<script src="../js/librerias/encuestafichadatoseguimiento.min.js?10"></script>'.
            '<script src="../js/jslibrerias/msjAlert/jnoty.js"></script>');
    }

    /*
    * STAR Encuestas ficha datos
    */

    /*
    * STAR Encuestas ppff 2019 
    */

    public function encuestappff2019() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Colegios');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestappff2019.min.js?4"></script>');
    }

    /*
    * STAR Encuestas ppff
    */

    /*
    * STAR Encuestas habitos y preferencias 2019 
    */

    public function encuestahp() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Academias');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestahp.min.js?2"></script>');
    }

    public function encuestahp45() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Colegios');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestahp45.min.js?2"></script>');
    }

    /*
    * END Encuestas habitos y preferencias 2019 
    */

    /*
    * STAR Encuestas pimu 2019 
    */

    /* public function encuestapimu2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Academias');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestapimu20192.js?3"></script>');
    }
*/

    public function encuestapimu() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Colegios');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestapimu2019.min.js?5"></script>');
    }

    /*
    * STAR Encuestas universidades 2019 
    */

    /*
    * STAR Encuestas universidades 2019 
    */

    public function encuestasmulima() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Academias');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestasmulima20192.min.js?3"></script>');
    }

    public function encuestasmpucp() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Academias');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestasmpucp20192.min.js?3"></script>');
    }

    public function encuestaULima() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Academias');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaULima2019.min.js?2"></script>');
    }

    public function encuestaPUCP() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Academias');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaPUCP2019.min.js?0"></script>');
    }

    public function encuestaUNI() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Academias');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaUNI2019.min.js?0"></script>');
    }

    public function encuestaUNMSM() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Pamer Academias');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaUNMSM2019.min.js?0"></script>');
    }

    /*
    * END Encuestas universidades 2019 
    */

    public function resultadosaca() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Resultados de Encuestas');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/enresultadosaca.min.js"></script>');
    }

    public function encuesta2018() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Encuesta');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuesta2018.min.js?3"></script>');
    }

    public function encuesta20192() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Encuesta');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuesta20192.min.js?5"></script>');
    }

    public function encuestaresumen() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Resultados de Encuestas');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaresumen.min.js"></script>');
    }

        public function capacitacionreporte() {
           AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Reporte de Capacitación');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/capacitacionreporte.min.js?2"></script>');       
        $usuario = $this->Session->read('usuario');
            
    }

    public function encuestatics() {
        AppController::isAuthorized();
        $this->layout = '';

        $usuario = $this->Session->read('usuario');

        $sql = "select count(0) as encuesta from colepame_evas2016.encuesta_tic where usuario='$usuario->correo'";
        $result = $this->Usuario->query($sql);
        $keys = array_keys($result[0][0]);
        $result = $result[0][0][$keys[0]];
        if ($result == 1) {
            $usuario->idPerfil = 0;
            $this->Session->write('usuario', $usuario);
            $this->redirect('..#' . $usuario->correo);
            exit();
        }

        $this->set('encuesta', $result);
        $this->set('usuario', $usuario);
    }

    public function encuestalogistica() {
        AppController::isAuthorized();
        $this->layout = '';

        $usuario = $this->Session->read('usuario');

        $sql = "select count(0) as encuesta from colepame_evas2016.encuesta_logistica where usuario='$usuario->correo'";
        $result = $this->Usuario->query($sql);
        $keys = array_keys($result[0][0]);
        $result = $result[0][0][$keys[0]];
        if ($result == 1) {
            $usuario->idPerfil = 0;
            $this->Session->write('usuario', $usuario);
            //$this->redirect('..#' . $usuario->correo);
            $encoded = '<script>window.top.location.replace("..#' . $usuario->correo . '");</script>';
            exit($encoded);
            //exit();
        }

        $this->set('encuesta', $result);
        $this->set('usuario', $usuario);
    }
    
    public function alumno() {
           AppController::isAuthorized();
        $this->layout = 'pages';        
        $this->set('objJS', '<script src="../js/librerias/encuestamkt001.min.js?2"></script>');       
        $usuario = $this->Session->read('usuario');
            
    }
    public function encuestaacademia01() {
           AppController::isAuthorized();
        $this->layout = 'pages';        
        $this->set('objJS', '<script src="../js/librerias/encuestamkt002.min.js?2"></script>');       
        $usuario = $this->Session->read('usuario');
            
    }
    public function encuestappff() {
           AppController::isAuthorized();
        $this->layout = 'pages';        
        $this->set('objJS', '<script src="../js/librerias/encuestappff.min.js?7"></script>');       
        $usuario = $this->Session->read('usuario');
            
    }

    public function encuestacliente() {
           AppController::isAuthorized();
        $this->layout = 'pages';        
        $this->set('objJS', '<script src="../js/librerias/encuestacliente.min.js?3"></script>');
        $this->set('piePag', '<!-- Archivo Js -->' .
                 '<link rel="stylesheet" href="../css/datepicker3.css">'.
                 '<script src="../js/jslibrerias/bootstrap-datepicker.js"></script>'.
                 '
                 <script>
    $("#datepicker").datepicker({
      startDate: "1940-01-01",
      endDate: "2000-12-31",
      autoclose: true

    });

    $("#datepicker2").datepicker({
      startDate: "1940-01-01",
      endDate: "2000-12-31",
      autoclose: true

    });

  </script>
                 '
                ); 
        $usuario = $this->Session->read('usuario');
            
    }

    public function index_capacitacion() {
           AppController::isAuthorized();
        $this->layout = 'pages';        
        $this->set('objJS', '<script src="../js/librerias/capacitacion.min.js?2"></script>'); 
        $this->set('piePag', '<!-- Archivo Js -->' .

                 '<script src="../js/jslibrerias/assets_capacitacion/royalslider/jquery-1.8.3.min.js"></script>'.  
                 '<script src="../js/jslibrerias/assets_capacitacion/royalslider/jquery.royalslider.min.js"></script>'.

                '<script src="../js/jslibrerias/assets_capacitacion/preview-assets/js/highlight.pack.js"></script>'.
                '<script src="../js/jslibrerias/assets_capacitacion/preview-assets/js/jquery-ui-1.8.22.custom.min.js"></script>'.
                '<script> hljs.initHighlightingOnLoad();</script>'.

                
                '<link href="../js/jslibrerias/assets_capacitacion/preview-assets/css/smoothness/jquery-ui-1.8.22.custom.css">'.
                '<link href="../js/jslibrerias/assets_capacitacion/preview-assets/css/github.css">'.
                
                '
                <script>
    jQuery(document).ready(function($) {
      // DO NOT INCLUDE THIS CODE IN YOUR BUILD
        var code = $("#html-code code");
        if(code.is(":empty")) {
          var rsCode = $(".royalSlider-preview");
          if(!rsCode.length) {
              rsCode = $(".royalSlider");
          }
          rsCode = rsCode.clone().removeClass("royalSlider-preview").wrap("<div></div>").parent().html();
          rsCode = htmlencode(rsCode);
          code.html(rsCode);
        }
        $("#js code").html( htmlencode($("#addJS").html()) );

        var filesHTML = "";
        $(".rs-file").each(function() {
          var item = $(this).removeAttr("class");
          if(item.is("script")) {
            filesHTML += "<script src=" + item.attr("src") + " />";
          } else {
            filesHTML += $("<div>").append( $(this).clone().removeAttr("class") ).html();
          }
          filesHTML += "\n";
        });
        $("#files code").html( htmlencode( filesHTML ) );
        $( ".tabs" ).tabs();
    });
    function htmlencode(str) {
      if(str) {
         return str.replace(/[&<>"]/g, function($0) {
          <!--  return "&" + {"&":"amp", "<":"lt", ">":"gt", ":"quot", ":"#39"}[$0] + ";";-->


        });
      }
    }   
  </script>
                '.
                
                '<script id="addJS">jQuery(document).ready(function($) {
                  $("#video-gallery").royalSlider({
                    arrowsNav: false,
                    fadeinLoadedSlide: true,
                    controlNavigationSpacing: 0,
                    controlNavigation: "thumbnails",

                    thumbs: {
                      autoCenter: false,
                      fitInViewport: true,
                      orientation: "vertical",
                      spacing: 0,
                      paddingBottom: 0
                    },
                    keyboardNavEnabled: true,
                    imageScaleMode: "fill",
                    imageAlignCenter:true,
                    slidesSpacing: 0,
                    loop: false,
                    loopRewind: true,
                    numImagesToPreload: 3,
                    video: {
                      autoHideArrows:true,
                      autoHideControlNav:false,
                      autoHideBlocks: true
                    }, 
                    autoScaleSlider: true, 
                    autoScaleSliderWidth: 960,     
                    autoScaleSliderHeight: 450,

                    imgWidth: 640,
                    imgHeight: 360

                  });
                });
                </script>');


        $usuario = $this->Session->read('usuario');     
    }

    public function capacitacion() {
           AppController::isAuthorized();
        $this->layout = 'pages';        
        $this->set('objJS', '<script src="../js/librerias/capacitacion.min.js?4"></script>'); 
        $this->set('piePag', '<!-- Archivo Js -->' .
                 '<script src="../js/jslibrerias/index.js"></script>');      
        $usuario = $this->Session->read('usuario');
            
    }
    
    public function encuestavu() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Encuesta VU');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestavu.min.js"></script>');
    }

    
    public function encuestatutor() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestatutor.min.js"></script>');
    }

    public function encuestaservicio() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaservicio.js?2"></script>');
    }

    public function encuestaclase() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaclase.js?2"></script>');
    }

    public function encuestaclase2() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaclase2.js?2"></script>');
    }

    public function encuestatutoriavirtualppff() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestatutoriavirtualppff.js"></script>');
    }

    public function encuestaservicioppff() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaservicioppff.js"></script>');
    }

    public function encuestavirtualalu() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestavirtualalu.js"></script>');
    }

    public function encuestaclase2020() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaclase2020.js"></script>');
    }

    public function encuestaclase2020alu() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encuestaclase2020alu.js"></script>');
    }

    public function testinteligencia() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/testinteligencia.js?2"></script>');
    }

    public function testpreguntas() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/testpreguntas.js?3"></script>');
    }

    public function testresultados() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/testresultados.js?6"></script>');
    }
    
    public function testtemperamento() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/testtemperamento.js?4"></script>');
    }
    
    public function getdatos2($op = null) {

        if ($this->Session->check('usuario') !== true) {
            $response = array(
                'success' => false,
                'message' => 'SESSION',
                'data' => 'Sesión Expirada. Por favor vuelva iniciar sesión para continuar'
            );
            $encoded = json_encode($response);
            exit(AppController::fnEncrypt($encoded));
        }
        $usuario = $this->Session->read('usuario');

        if ($this->request->is('post')) {
            $this->layout = '';
            ini_set('max_execution_time', 300);

            $sql = '';
            if (isset($op)) {
                switch ($op) {
                    case 1:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ALUMNOS_HORARIO_GET('$usuario->correo',$json->salon)";
                        exit(AppController::getResult($sql));
                        break;
                    
                    case 2:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        //$sql = "CALL NPV_AULA_SALONES_GET('$usuario->correo', " . (isset($json->franqui) ? $json->franqui : "null") . ", " . (isset($json->islima) ? $json->islima : "null") . ", " . (isset($json->pantalla) ? $json->pantalla : "null") . ", $json->anio, $json->sede, '$json->meses');";
                        $sql = "call PAMER_COLWEB_ENCUESTA_CONSOLIDADO('$usuario->correo',$json->sede,$json->lin,$json->salon)";
                        
                        
                        AppController::getDataTable($sql);
                        
                        
                        
                        break;

                    
                }
            } else {
                exit();
            }
        } else {
            $this->redirect('/#' . $usuario->correo);
        }
    }
    
    public function getdatos($op = null) {
        if ($this->Session->check('usuario') !== true) {
            $response = array(
                'success' => false,
                'message' => 'SESSION',
                'data' => 'Sesión Expirada. Por favor vuelva iniciar sesión para continuar'
            );
            $encoded = json_encode($response);
            exit(AppController::fnEncrypt($encoded));
        }
        $usuario = $this->Session->read('usuario');

        if ($this->request->is('post')) {
            $this->layout = '';
            ini_set('max_execution_time', 300);
            ini_set('max_input_time', 300);

            $sql = '';
            if (isset($op)) {
                switch ($op) {
                    case 1:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ENCUESTA_EFECTIVIDAD_GET('$usuario->correo',$usuario->id)";
                        exit(AppController::getResult($sql));
                        break;
                    case 2:/*Actualizado 09-11-2017*/
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ENCUESTA_EFECTIVIDAD_AVANCE3('$usuario->correo',$json->sede,$json->salon,$json->ciclo)";
                        exit(AppController::getResult($sql));
                        break;
                     case 3:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ENCUESTA_EFECTIVIDAD_RESULTADOS('$usuario->correo',$usuario->id)";
                        
                        exit(AppController::getDataTable($sql));
                        break;
                    case 8:                         
                        $sql = "CALL NPV_ENCUESTAS_GET('$usuario->correo',$usuario->id)";
                        exit(AppController::getResult($sql));
                        break;
                    case 9:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ENCUESTAS_REPORTE_GET()";
                        
                        exit(AppController::getDataTable($sql));
                        break;

                    case 10:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ENCUESTA_EFECTIVIDAD_COLEGIOS('$usuario->correo',$json->sede,$json->salon,$json->ciclo)";
                        exit(AppController::getResult($sql));
                        break;

                    case 11:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_GES_REPORTE_CAPACITACION()";
                        exit(AppController::getDataTable($sql));
                        break;

                    /* UBIEGO */

                    case 12:
                        $sql = "CALL MASTER_DEPARTAMENTOS($usuario->codigo)";
                        exit(AppController::getResult($sql));
                        break;

                    case 13:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL MASTER_PROVINCIAS($usuario->codigo, $json->idDepartamento)";
                        exit(AppController::getResult($sql));
                        break;

                    case 14:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL MASTER_DISTRITOS($usuario->codigo, $json->idProvincia)";
                        exit(AppController::getResult($sql));
                        break;

                    case 18:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL MASTER_DISTRITOS_ALL('$usuario->codigo', '$json->idProvincia1', '$json->idProvincia2')";
                        exit(AppController::getResult($sql));
                        break;

                    

                    /* UBIEGO */

                    /* DATOS ALUMNOS */
                    
                    case 15:
                        // $prejson = $this->request->data('objJSON');
                        // $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTAS_ACTIVIDAD_GET($usuario->codigo)";
                        exit(AppController::getResult($sql));
                        break;

                    case 16:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTAS_SEDES_GET($usuario->codigo)";
                        exit(AppController::getResult($sql));
                        break;

                    case 17:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL GES_ENCUESTA_REPORTE_DATOS_ALUMNOS('$usuario->codigo','$json->idLocal','$json->idActividad')";
                        exit(AppController::getDataTable($sql));
                        break;

                    /* DATOS ALUMNOS */



                    /* Seguimiento Academias Ficha Datos */

                    case 19:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTAS_FD_SEGUIMIENTO('$usuario->id', '$json->idSede', '$json->idActividad')";
                        exit(AppController::getResult($sql));
                        break;

                    case 20:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTAS_FD_SEGUIMIENTO_GET('$usuario->id', '$json->idFichaUsuario')";
                        exit(AppController::getResult($sql));
                        break;

                    case 21:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTAS_FD_SEGUIMIENTO_DETALLADO('$usuario->id', '$json->idFichaUsuario')";
                        exit(AppController::getResult($sql));
                        break;

                    case 22:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTAS_FD_SEGUIMIENTO_ESTADISTICO('$usuario->id', '$json->idSede', '$json->idActividad')";
                        exit(AppController::getResult($sql));
                        break;


                    case 23:
                        // $prejson = $this->request->data('objJSON');
                        // $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_DATOS_USUARIOS_ID_GET('$usuario->id')";
                        exit(AppController::getResult($sql));
                        break;
                    case 24:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ENCUESTA_UNIVERSIDADES_GET()";
                        exit(AppController::getResult($sql));
                        break;

                    /* Seguimiento Academias Ficha Datos  */

                    case 25:
                        $prejson = $this->request->data('objJSON');
                    $json = AppController::JSONisValid($prejson);
                    $sql = "CALL PAMER_COLWEB_ENCUESTA_CLASE_CURSOS($usuario->idsalon,'$usuario->correo')";
                    exit(AppController::getResult($sql));
                    break;
                    case 26:
                        $prejson = $this->request->data('objJSON');
                    $json = AppController::JSONisValid($prejson);
                    $sql = "CALL PAMER_COLWEB_TEST_INTELIGENCIA($json->idpregunta)";
                    exit(AppController::getResult($sql));
                    break;

                    case 27:
                        $prejson = $this->request->data('objJSON');
                    $json = AppController::JSONisValid($prejson);
                    $sql = "CALL PAMER_COLWEB_TEST_TEMPERAMENTO_DEMO()";
                    exit(AppController::getDataTable($sql));  // para mostrar
                }
            } else {
                exit();
            }
        } else {
            $this->redirect('/#' . $usuario->correo);
        }
    }




    public function efectividad() {
        AppController::isAuthorized();
        $usuario = $this->Session->read('usuario');
        $this->layout = '';
        $this->set('usuario', $usuario);
        //$this->set('subTitPage', date("Y"));
        //$this->set('objJS', '');        
    }
    public function encuesta() {
        AppController::isAuthorized();
        $usuario = $this->Session->read('usuario');
        $this->layout = '';
        $this->set('usuario', $usuario);
        //$this->set('subTitPage', date("Y"));
        //$this->set('objJS', '');        
    }

    public function resumenaca() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Resumen de Encuestas');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/enresumenaca.min.js?2"></script>');
    }
    
    public function resumenefec() {
        /*Actualizado 09-11-2017*/
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Avance Encuesta de Efectividad');
        $this->set('subTitPage',date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encresumenefec.min.js?8"></script>');
    }

    public function resumencole() {
        /*Actualizado 09-11-2017*/
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Reporte Encuesta Colegios');
        $this->set('subTitPage',date("Y"));
        $this->set('objJS', '<script src="../js/librerias/encresumencole.js?8"></script>');
    }

    public function resultadosefec() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Resultados Encuesta de Efectividad');        
        $this->set('objJS', '<script src="../js/librerias/encresultadosefec.js?0"></script>');
    }

    public function reporteaca() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Reporte de Encuestas');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/enreporteaca.min.js"></script>');
    }

//    public function alumno() {
//        // AppController::isAuthorized();
//        $this->layout = 'pages';
//        $this->set('titPage', 'Encuestas');
//        $this->set('subTitPage', date("Y"));
//        $this->set('objJS', '<!-- bootstrap datepicker --><link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">' .
//                '<script src="../js/librerias/uingresos.min.js?0"></script>'); //
//        $this->set('piePag', '<!-- bootstrap datepicker -->' .
//                '<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>' .
//                '<script src="../plugins/datepicker/locales/bootstrap-datepicker.es.js"></script>');
//    }

    public function index() {
        AppController::isAuthorized();
        $this->layout = '';

        $usuario = $this->Session->read('usuario');
        $this->redirect('alumnoacademia#' . $usuario->correo);
    }

    public function alumnoacademia() {
        AppController::isAuthorized();
        $this->layout = '';

        $usuario = $this->Session->read('usuario');

        $sql = "select count(0) as encuesta from encuesta_academia where codalumno='$usuario->id'";
        $result = $this->Usuario->query($sql);
        $keys = array_keys($result[0][0]);
        $result = $result[0][0][$keys[0]];

        $this->set('encuesta', $result);
        $this->set('usuario', $usuario);
    }

    public function alumnocolegio() {
        AppController::isAuthorized();
        $this->layout = '';

        $usuario = $this->Session->read('usuario');

        $sql = "select count(0) as encuesta from encuesta_colegio where codalumno='$usuario->id'";
        $result = $this->Usuario->query($sql);
        $keys = array_keys($result[0][0]);
        $result = $result[0][0][$keys[0]];
        if ($result == 1) {
            $usuario->idPerfil = 0;
            $this->Session->write('usuario', $usuario);
            $this->redirect('..#' . $usuario->correo);
        }

        $this->set('encuesta', $result);
        $this->set('usuario', $usuario);
    }

    public function seguimiento() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Alumnos');
        $this->set('subTitPage', date("Y"));

        $this->set('objJS', '<script src="../js/librerias/enseguimiento.min.js"></script>');
    }

    public function resumencol() {
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', 'Resumen de Encuestas');
        $this->set('subTitPage', date("Y"));
        $this->set('objJS', '<script src="../js/librerias/enresumencol.min.js"></script>');
    }

    public function select($op = null) {
        if ($this->Session->check('usuario') !== true) {
            $response = array(
                'success' => false,
                'message' => 'SESSION',
                'data' => 'Sesión Expirada. Por favor vuelva iniciar sesión para continuar'
            );
            $encoded = json_encode($response);
            exit($encoded);
        }
        $usuario = $this->Session->read('usuario');

        if ($this->request->is('post')) {
            $this->layout = '';
            ini_set('max_execution_time', 300);

            $sql = '';
            if (isset($op)) {
                switch ($op) {
                    case 0:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTACOL_FAIL_GET('$usuario->correo',$json->salon)";
                        AppController::getTable($sql);
                        break;
                    case 1:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTACOL_RESUMEN('$usuario->correo', $json->sede, $json->grado, $json->salon, $json->preg)";
                        AppController::getTable($sql);
                        break;
                }
            } else {
                exit();
            }
        } else {
            $this->redirect('/#' . $usuario->correo);
        }
    }

    public function mantto($op = null) {
        if ($this->Session->check('usuario') !== true) {
            $response = array(
                'success' => false,
                'message' => 'SESSION',
                'data' => 'Sesión Expirada. Por favor vuelva iniciar sesión para continuar'
            );           
            $encoded = json_encode($response);
            exit(AppController::fnEncrypt($encoded));
        }
        $usuario = $this->Session->read('usuario');

        if ($this->request->is('post')) {
            $this->layout = '';
            ini_set('max_execution_time', 300);

            $sql = '';
            if (isset($op)) {
                switch ($op) {


                    /* STAR VALIDA INFO USER */

                    case 94:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL VALIDA_INFO_USER('$usuario->id','$json->emailPersonal','$json->celular')";
                        exit(AppController::getResult($sql));
                        break;

                    /* END VALIDA INFO USER */
                    


                    /* DATOS ALUMNOS */

                    case 95:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTAS_FD_SEGUIMIENTO_SET('$usuario->id','$json->idFichaUsuario','$json->estadoLlamada','$json->idcambioSede','$json->observacion','$json->codMatricula')";
                        exit(AppController::getResult($sql));
                        break;

                    case 96:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTAS_DATOS_ALUMNO(
                        '$usuario->id',
                        '$json->tipoEnc',
                        '$json->rpta1',
                        '$json->rpta2',
                        '$json->rpta3',
                        '$json->rpta4',
                        '$json->rpta5',
                        '$json->rpta6',
                        '$json->rpta7',
                        '$json->rpta8',
                        '$json->rpta81',
                        '$json->rpta9',
                        '$json->rpta10',
                        '$json->rpta11')";
                        exit(AppController::getResult($sql));
                        break;
                    /* DATOS ALUMNOS */


                    /* PPFF */
                    case 97:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUETAS_GENERALES_PPFF(
                        '$usuario->codigo',
                        '$json->tipoEnc',
                        '$json->rpta1',
                        '$json->rpta2',
                        '$json->rpta3',
                        '$json->rpta4',
                        '$json->rpta5',
                        '$json->rpta6',
                        '$json->rpta7',
                        '$json->rpta8',
                        '$json->rpta9',
                        '$json->rpta10',
                        '$json->rpta11',
                        '$json->rpta12',
                        '$json->rpta13',
                        '$json->rpta14',
                        '$json->rpta15',
                        '$json->rpta16',
                        '$json->rpta17',
                        '$json->rpta18',
                        '$json->rpta19',
                        '$json->rpta20')";
                        exit(AppController::getResult($sql));
                        break;
                    /* PPFF */


                	/* START REGISTRO DE ENCUESTAS HÁBITOS Y PREFERENCIAS */
                    case 98:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTAS_GENERALES_HP_SET(
                        '$usuario->codigo',
                        '$json->tipo',
                        '$json->rpta1',
                        '$json->rpta2',
                        '$json->rpta3',
                        '$json->rpta4',
                        '$json->rpta5',
                        '$json->rpta61',
                        '$json->rpta62',
                        '$json->rpta63',
                        '$json->rpta64',
                        '$json->rpta65',
                        '$json->rpta66',
                        '$json->rpta67',
                        '$json->rpta68',
                        '$json->rpta69',
                        '$json->rpta71',
                        '$json->rpta72',
                        '$json->rpta73',
                        '$json->rpta74',
                        '$json->rpta75',
                        '$json->rpta8',
                        '$json->rpta9')";
                        exit(AppController::getResult($sql));
                        break;

                    /* END REGISTRO DE ENCUESTA ACADEMIAS 2019 */

                    /* START REGISTRO DE ENCUESTAS ACADEMIAS 2019 */
                    case 99:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PIMU_ENCUESTA_REGISTRO_SET(
                        '$usuario->codigo',
                        '$json->tipo_linea',
                        '$json->rpta1')";
                        exit(AppController::getResult($sql));
                        break;

                    /* END REGISTRO DE ENCUESTA ACADEMIAS 2019 */

                    /* START REGISTRO DE ENCUESTAS ACADEMIAS 2019 */
                    case 100:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTA_ULIMA_PUCP_UNI_UNMSM_20192(
                        '$usuario->codigo',
                        '$json->tipoAca',
                        '$json->rpta1',
                        '$json->rpta2',
                        '$json->rpta31',
                        '$json->rpta32',
                        '$json->rpta33',
                        '$json->rpta34',
                        '$json->rpta35',
                        '$json->rpta36',
                        '$json->rpta4',
                        '$json->rpta5',
                        '$json->rpta6',
                        '$json->rpta7',
                        '$json->rpta8',
                        '$json->rpta9',
                        '$json->rpta10',
                        '$json->rpta11')";
                        exit(AppController::getResult($sql));
                        break;

                    /* END REGISTRO DE ENCUESTA ACADEMIAS 2019 */
                    case 101:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTAS345_SET(
                        '$usuario->codigo',
                        '$json->rpta1'
                        )";
                        exit(AppController::getResult($sql));
                        break;

                    case 0:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTA_ACADEMIA('$usuario->id','$json->rpta1','$json->rpta2')";
                        exit(AppController::getJSON('Usuario', $sql));
                        break;
                    case 1:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTA_LISTA('$usuario->correo',$json->salon)";
                        AppController::getTable($sql);
                        break;
                    case 2:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTA_CONSOLIDADO('$usuario->correo',$json->sede,$json->lin,$json->salon)";
                        AppController::getTable($sql);
                        break;
                    case 3:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTA_RESULTADOS('$usuario->correo',$json->sede,$json->lin,$json->salon)";
                        AppController::getTable($sql);
                        break;
                    case 4:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTA_COLEGIO('$usuario->id','$json->rpta')";
                        exit(AppController::getJSON('Usuario', $sql));
                        break;
                    case 5:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTA_COLEGIO('$usuario->id','$json->rpta')";
                        exit(AppController::getJSON('Usuario', $sql));
                        break;
                    case 6:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTACOL_FAIL_SET('$usuario->correo','$json->json',$json->salon)";
                        exit(AppController::getJSON('Usuario', $sql));
                        break;
                    case 7:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTA_TIC('$usuario->correo','$json->rpta')";
                        exit(AppController::getJSON('Usuario', $sql));
                        break;
                    case 8:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::isValidJson($prejson);
                        $sql = "call PAMER_COLWEB_ENCUESTA_LOGISTICA('$usuario->correo','$json->rpta')";
                        exit(AppController::getJSON('Usuario', $sql));
                        break;

                    case 9:
                        $usuario->idPerfil = 0;
                        $this->Session->write('usuario', $usuario);
                        $response = array(
                            'success' => true,
                            'message' => 'OK',
                            'data' => 'redirect'
                        );
                        $encoded = json_encode($response);
                        exit($encoded);
                        break;
                    case 10:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ENCUESTA_EFECTIVIDAD_SET('$usuario->correo',$usuario->id,'$json->cadena',$json->cant)";
                        exit(AppController::getResult($sql));
                        break;
                    
                    case 11:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_ENCUESTA_ALUMNO('$usuario->codigo','$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta4','$json->rpta5','$json->rpta6','$json->rpta7','$json->rpta8','$json->rpta9','$json->rpta10','$json->rpta11','$json->rpta12')";
                        exit(AppController::getResult($sql));
                        break;
                    
                    case 12:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_ENCUESTA_ALUMNO2('$usuario->codigo','$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta4','$json->rpta5','$json->rpta6','$json->rpta7','$json->rpta8','$json->rpta9','$json->rpta10','$json->rpta11','$json->rpta12','$json->rpta13')";
                        exit(AppController::getResult($sql));
                        break;
                    
                    case 50:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ENCUESTAS_SET('$usuario->correo',$usuario->id,$json->idenc,'$json->cadena')";
                        exit(AppController::getResult($sql));
                        break;
                    
                    case 51:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_ENCUESTAS001_REPORTE_GET()('$usuario->correo',$usuario->id,$json->idenc,'$json->cadena')";
                        exit(AppController::getResult($sql));
                        break;

                    case 52:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_ENCUESTA_PPFF('$usuario->id','$json->rpta1','$json->rpta2')";
                        exit(AppController::getResult($sql));
                        break;

                    case 53:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_GES_CAPACITACION('$usuario->id','$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta4','$json->rpta5','$json->aciertos')";
                        exit(AppController::getResult($sql));
                        break;

                     case 54:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_ENCUESTA_CLIENTE('$usuario->id','$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta4','$json->rpta5','$json->rpta6','$json->rpta7','$json->rpta8','$json->rpta9','$json->rpta10','$json->rpta11','$json->rpta12','$json->rpta13','$json->rpta14','$json->rpta15','$json->rpta16','$json->rpta17','$json->rpta18','$json->rpta19','$json->rpta20','$json->rpta21')";
                        exit(AppController::getResult($sql));
                        break;
                    
                        case 55:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ACAWEB_ENCUESTA('$usuario->codigo','$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta4','$json->rpta5','$json->rpta6','$json->rpta7','$json->rpta8','$json->rpta9','$json->rpta10')";
                        exit(AppController::getResult($sql));
                        break;
                    

                    case 56:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ACAWEB_ENCUESTA_20192('$usuario->codigo','$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta4','$json->rpta5','$json->rpta6','$json->rpta7','$json->rpta8','$json->rpta9','$json->rpta10')";
                        exit(AppController::getResult($sql));
                        break;

		    case 57:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_ENCUESTA_VU2020('$usuario->codigo','$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta4','$json->rpta5')";
                        exit(AppController::getResult($sql));
                        break;

            case 58:
                            $prejson = $this->request->data('objJSON');
                            $json = AppController::JSONisValid($prejson);
                            $sql = "CALL PAMER_COLWEB_ENCUESTA_TUTOR('$usuario->codigo','$json->rpta1','$json->rpta2','$json->rpta3')";
                            exit(AppController::getResult($sql));
                            break;

                                case 59:
                                $prejson = $this->request->data('objJSON');
                                $json = AppController::JSONisValid($prejson);
                                $sql = "CALL PAMER_COLWEB_ENCUESTA_SERVICIO('$usuario->codigo','$json->rpta1','$json->rpta2')";
                                exit(AppController::getResult($sql));
                                break;

                                case 60:
                                    $prejson = $this->request->data('objJSON');
                                    $json = AppController::JSONisValid($prejson);
                                    $sql = "CALL PAMER_COLWEB_ENCUESTA_CLASE('$usuario->codigo','$json->json')";
                                    exit(AppController::getResult($sql));
                                    break;

                                    case 61:
                                        $prejson = $this->request->data('objJSON');
                                        $json = AppController::JSONisValid($prejson);
                                        $sql = "CALL PAMER_COLWEB_ENCUESTA_CLASE2('$usuario->codigo','$json->json')";
                                        exit(AppController::getResult($sql));
                                        break;

         
                    
                    
                   case 118:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_ENCUESTA_COLEGIO2020_SET(
                        '$usuario->codigo',
                        '$json->tipoencue',
                        '$json->rpta1',
                        '$json->rpta2',
                        '$json->rpta3',
                        '$json->rpta4',
                        0,
                        0,
                        0,
                        0,
                        0,
                        0,
                        0,
                        0,
                        0,
                        0,
                        '$json->rpta5',
                        0,
                        0,
                        0
                        )";
                        exit(AppController::getResult($sql));
                        break;


                        case 119:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_ENCUESTA_TUTORIA_VIRTUAL('$usuario->correo','$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta4','$json->rpta5','$json->rpta6','$json->rpta7','$json->rpta8','$json->sugerencia')";
                        exit(AppController::getResult($sql));

                        case 120:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_ENCUESTA_SERVICIO_PPFF('$usuario->correo','$json->rpta4','$json->rpta5','$json->sugerencia')";
                        exit(AppController::getResult($sql));

                        case 121:
                            $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL PAMER_COLWEB_ENCUESTA_VIRTUAL_ALU('$usuario->correo','$json->rpta1','$json->rpta2','$json->rpta3','$json->rpta6','$json->rpta7','$json->rpta8')";
                        exit(AppController::getResult($sql));

                        case 122:
                            $prejson = $this->request->data('objJSON');
                            $json = AppController::JSONisValid($prejson);
                            $sql = "CALL PAMER_COLWEB_ENCUESTA_CLASE2020($usuario->idsalon,'$usuario->correo','$json->json')";
                            exit(AppController::getResult($sql));
                            break;

                            case 123:
                                $prejson = $this->request->data('objJSON');
                                $json = AppController::JSONisValid($prejson);
                                $sql = "CALL PAMER_COLWEB_ENCUESTA_CLASE2020_ALU($usuario->idsalon,'$usuario->correo','$json->json')";
                                exit(AppController::getResult($sql));
                                break;

                            case 124:
                                    $prejson = $this->request->data('objJSON');
                                $json = AppController::JSONisValid($prejson);
                                $sql = "CALL PAMER_COLWEB_TEST_INTELIGENCIA_GRABAR('$usuario->codigo','$json->idpregunta','$json->idalternativa')";
                                exit(AppController::getResult($sql));

                            break;
                            case 125:
                                $prejson = $this->request->data('objJSON');
                                $json = AppController::JSONisValid($prejson);
                                $sql = "CALL PAMER_COLWEB_TEST_TEMPERAMENTO('$usuario->codigo','$json->json')";
                                exit(AppController::getResult($sql));
                                break;
                }



            } else {
                exit();
            }
        } else {
            $this->redirect('/#' . $usuario->correo);
        }
    }

}
