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
        $this->set('piePag', '<!-- Java -->'.'<script src="../js/librerias/cursospamergamer.js?2"></script>');

    }

    public function examenpamergamer() {

        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', ' '.date("Y"));
        $this->set('objJS', '<!-- Css -->');
        $this->set('piePag', '<link rel="stylesheet" href="../assets_ace/css/pamergamer.css">' . '<!-- Java -->'.'<script src="../js/librerias/examenpamergamer.js?5"></script>');

    }

    public function resultadospamergamer() {

        AppController::isAuthorized();
        $this->layout = 'pages';
        $this->set('titPage', '');
        $this->set('subTitPage', 'Lectogamer Primaria '.date("Y"));
        $this->set('objJS', '<!-- Css -->');
        $this->set('piePag', '<!-- Java -->'.'<script src="../js/librerias/resultadospamergamer.js?2"></script>');

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
 
                    case 4:

                        $prejson = $this->request->data('objJSON');

                        $json = AppController::JSONisValid($prejson);

                        $sql = "CALL NPV_PAMERGAMER_LISTAR_PERSONAJES('$usuario->id','$json->sexo')";

                        exit(AppController::getResult($sql));

                    case 5: // Validar q tenga avatar para pasar defrente a cursos
                            $prejson = $this->request->data('objJSON');
                            $json = AppController::JSONisValid($prejson);
                            $sql = "CALL NPV_PAMERGAMER_REGISTRO_AVATAR('$usuario->codigo')";
                            exit(AppController::getResult($sql));
                            break;


                    case 6:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_PAMERGAMER_MOSTRAR_GRADOS('$usuario->codigo')";
                        exit(AppController::getResult($sql));
                        break;

                    case 7: // muestra los datos del avatar del usuario
                            $prejson = $this->request->data('objJSON');
                            $json = AppController::JSONisValid($prejson);
                            $sql = "CALL NPV_PAMERGAMER_PERFIL('$usuario->codigo')";
                            exit(AppController::getResult($sql));
                            break;

		    

		  case 10:
                        $prejson = $this->request->data('objJSON');
                        $json = AppController::JSONisValid($prejson);
                        $sql = "CALL NPV_LECTOGAMER_ULTIMO_ACCESO('$usuario->id')";
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

                        $sql = "CALL NPV_PAMERGAMER_PERFIL_GET('$usuario->codigo','$json->personaje','$json->nick')";

                        exit(AppController::getResult($sql));



                    case 3:

                        $prejson = $this->request->data('objJSON');

                        $json = AppController::JSONisValid($prejson);

                        $sql = "CALL NPV_PAMERGAMER_GRABAR_EXAMEN('$usuario->codigo','$json->curso','$json->semana','$json->preg1','$json->preg2','$json->preg3','$json->preg4')";

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

