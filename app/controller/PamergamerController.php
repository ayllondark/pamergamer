<?php



App::uses('AppController', 'Controller');



class PamergamerController extends AppController {

    public $uses = array('Usuario');

    


   public function intropamergamer() {
        
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', ' '.date("Y"));
        $this->set('objJS', '<!-- Css -->');
        $this->set('piePag', '<!-- Java -->'.'<script src="../js/librerias/intropamergamer.js"></script>');
    }

    public function avatarpamergamer() {
        
        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', ''.date("Y"));
        $this->set('objJS', '<!-- Css -->');
        $this->set('piePag', '<!-- Java -->'.
            '<script src="../js/librerias/avatarpamergamer.js"></script>');
    }


    public function cursospamergamer() {

        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', 'Lectogamer Primaria '.date("Y"));
        $this->set('objJS', '<!-- Css -->');
        $this->set('piePag', '<!-- Java -->'.'<script src="../js/librerias/cursospamergamer.js"></script>');

    }

    public function examenpamergamer() {

        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', ' '.date("Y"));
        $this->set('objJS', '<!-- Css -->');
<<<<<<< HEAD
        $this->set('piePag', '<link rel="stylesheet" href="../assets_ace/css/pamergamer.css">' . '<!-- Java -->'.'<script src="../js/librerias/examenpamergamer.js?5"></script>');

    }

    public function resultadospamergamer() {

        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', 'Lectogamer Primaria '.date("Y"));
        $this->set('objJS', '<!-- Css -->');
        $this->set('piePag', '<!-- Java -->'.'<script src="../js/librerias/resultadospamergamer.js?2"></script>');
=======
        $this->set('piePag', '<link rel="stylesheet" href="../assets_ace/css/pamergamer.css?2">' . '<!-- Java -->'.'<script src="../js/librerias/examenpamergamer.js?2"></script>');
>>>>>>> 90040ac8b99756a4ba911233b23f2f11324df4d1

    }



    public function getdatos($op = null) {

        $usuario = $this->Session->read('usuario');
        if (count($usuario) <= 0) {

            $response = array(
                'success' => false,
                'message' => 'SESSION',
                'data' => 'SesiÃ³n Expirada. Por favor vuelva iniciar sesiÃ³n para continuar'

            );

            $encoded = json_encode($response);

            exit(AppController::fnEncrypt($encoded));

        }

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
                        $sql = "CALL NPV_PAMERGAMER_CURSOS('$usuario->codigo','$json->semana')";
                        exit(AppController::getResult($sql));

                    case 2:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_PAMERGAMER_MOSTRAR_PREGUNTAS('$usuario->codigo','$json->semana','$json->curso')";
                        exit(AppController::getResult($sql));
                    
                    case 3:
                            $prejson = $this->request->data('objJSON');
                            $json = AppController::JSONisValid($prejson);
                            $sql = "CALL NPV_PAMERGAMER_RESULTADOS('$usuario->codigo','$json->semana','$json->curso')";
                            exit(AppController::getResult($sql));
                    case 30:

                        $prejson = $this->request->data('objJSON');

                        $json = AppController::JSONisValid($prejson);

                        $sql = "CALL NPV_LECTOGAMER_MOSTRAR_LECTURA('$usuario->id',$json->idlectura)";

                        exit(AppController::getResult($sql));



                    case 4:

                        $prejson = $this->request->data('objJSON');

                        $json = AppController::JSONisValid($prejson);

                        $sql = "CALL NPV_LECTOGAMER_LISTAR_PERSONAJES('$usuario->id','$json->sexo')";

                        exit(AppController::getResult($sql));



                    case 5:

                        $prejson = $this->request->data('objJSON');

                        $json = AppController::JSONisValid($prejson);

                        $sql = "CALL NPV_LECTOGAMER_MOSTRAR_PREGUNTAS('$usuario->id','$json->idlectura','$json->grado','$json->semana')";

                        exit(AppController::getResult($sql));

                        

                    case 6:

                        $prejson = $this->request->data('objJSON');

                        $json = AppController::JSONisValid($prejson);

                        $sql = "CALL NPV_LECTOGAMER_MOSTRAR_GRUPO_VU('$usuario->id')";

                        exit(AppController::getResult($sql));



		     case 7:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_LECTOGAMER_ADMIN_GET('$usuario->id','$json->grado','$json->semana')";
                        exit(AppController::getResult($sql));

                    case 8:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL GET_GRUPOS_VU()";
                        exit(AppController::getResult($sql));
                        break;

		    case 9:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_LECTOGAMER_REGISTRO_AVATAR('$usuario->id')";
                        exit(AppController::getResult($sql));
                        break;

		  case 10:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_LECTOGAMER_ULTIMO_ACCESO('$usuario->id')";
                        exit(AppController::getResult($sql));
                        break;

		  case 11:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_LECTOGAMER_ALU_DESTACADOS('$json->grupo')";
                        exit(AppController::getResult($sql));
                        break;

                    case 12:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_LECTOGAMER_BLOQUEO_EXAMEN('$usuario->id','$json->idlectura')";
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



    public function mantto($op = null) {

        if ($this->Session->check('usuario') !== true) {

            $response = array(

                'success' => false,

                'message' => 'SESSION',

                'data' => 'SesiÃ³n Expirada. Por favor vuelva iniciar sesiÃ³n para continuar'

            );

            $encoded = json_encode($response);

            //exit(AppController::fnEncrypt($encoded));

            exit($encoded);

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

                        $sql = "CALL NPV_LECTOGAMER_REGISTRO_SET('$usuario->id','$json->aniociclo','$json->grado','$json->semana','$json->nomlectura','$json->deslectura','$json->puntaje','$json->archivo')";

                        exit(AppController::getResult($sql));



                    case 2:

                        $prejson = $this->request->data('objJSON');

                        $json = AppController::JSONisValid($prejson);

                        $sql = "CALL NPV_LECTOGAMER_PERFIL_GET('$usuario->id','$json->personaje','$json->nick')";

                        exit(AppController::getResult($sql));



                    case 3:

                        $prejson = $this->request->data('objJSON');

                        $json = AppController::JSONisValid($prejson);

                        $sql = "CALL NPV_LECTOGAMER_GRABAR_EXAMEN('$usuario->id','$json->codlectura','$json->preg1','$json->preg2','$json->preg3','$json->preg4')";

                        exit(AppController::getResult($sql));





                }

            } else {

                exit();

            }

        } else {

            $this->redirect('/#' . $usuario->correo);

        }

    }





    public function close() {

        $this->Session->destroy();

        session_destroy();

        $this->redirect('/users');

    }







}

