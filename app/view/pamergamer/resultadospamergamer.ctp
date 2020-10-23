<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pamer Gamer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <style>

    body{
    background: url("../img/fondopamergamer.png") no-repeat center center fixed!important;
    background-size: cover!important;
    }

        .paralelogramo {
     width: 200px; 
     height: 60px; 
     opacity: 0.9;
     background: #104e7d;
     -webkit-transform: skew(50deg);
     -moz-transform: skew(50deg);
     -ms-transform: skew(50deg);
     -o-transform: skew(60deg);
     transform: skew(-30deg);
     text-align: right;
     border-radius: 0.5em;
     color: #ffffff;
     font-weight: bold;
     text-transform: unset;
     display: block;
     padding-top: 5px;
}
.paralelogramo .texto {
    transform: skew(30deg);
    padding-top: 5PX;
    padding-bottom: 5px;
    padding-left: 30PX;
}
.paralelogramo2 {
     width: 100%; 
     height: 60px;
     min-width: 300px;
     opacity: 0.9;
     background: #104e7d;
     -webkit-transform: skew(50deg);
     -moz-transform: skew(50deg);
     -ms-transform: skew(50deg);
     -o-transform: skew(60deg);
     transform: skew(-30deg);
     text-align: right;
     border-radius: 0.5em;
     color: #ffffff;
     font-weight: bold;
     text-transform: unset;
     display: block;
     padding-top: 5px;
}
.paralelogramo2 .texto2 {
    transform: skew(30deg);
    padding-top: 5PX;
    padding-bottom: 5px;
    
}

/* Inicio Barra de Progreso de Cards */

.barralec { 

margin-top: 12px;

height: 10px;

position: relative;

background: #b3b2b2;

border-radius: 8px;

padding: 5px;

 box-sizing: unset!important;

}

.barralec > span {

display: block;

height: 100%;

border-top-right-radius: 8px;

border-bottom-right-radius: 8px;

border-top-left-radius: 20px;

border-bottom-left-radius: 20px;

background-color: #0FAFBB;

position: relative;

overflow: hidden;

animation: prog 2s linear;

}

.pordesa{
margin-top: 8px;
color: #fff;
}

@keyframes prog {

0% {width: 0%}

100% {width: 100%}

}

/* Fin Barra de Progreso de Cards */

@media (min-width: 992px){
.col-md-12 {
    width: 100%;
    text-align: center;
}
}

.swal2-popup{
    display: flex;
    width: 50%;
    height: 50%;
}

#confetti{
    position: absolute;
    z-index: 1;
}

canvas {
      width: 100%;
      height: 100vh;
    }

    
    </style>
</head>

<body>


<canvas id="confetti"></canvas>




<div id="semanaexamen" style="display:none;"></div>
<div id="cursoexamen" style="display:none;"></div>

<div class="container-fluid" style="margin-top: 1%;" >



            <div class="row">
               
            <div class="col-xs-12 col-sm-12 col-md-2"></div>
            <div class="col-xs-12 col-sm-12 col-md-8" style="padding: 40px; background-color: #19b5db; border-radius: 1em;">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="paralelogramo2" >
                                    <div class="texto2">
                                    <div class="row">
                                    <div class=" col-xs-3 col-sm-3 col-md-3" id="imgavatar">
                                                        
                                                    </div>
                                                    <div class=" col-xs-4 col-sm-4 col-md-5" style="text-align: left;">
                                                            <div class="row" style="font-size: 1.5rem;  color: #fff;       font-weight: 600;">
                                                                NICKNAME
                                                            </div>
                                                            <div class="row" id="nick" style="margin-bottom: 0.4rem; color: #f5f5f5; font-size: 1.2rem; ">
                                                                
                                                            </div>
                                                    </div>
                                            <div class=" col-xs-4 col-sm-4 col-md-3">
                                                <img width="40px" height="40px" src="https://static.wixstatic.com/media/e5be46_e84e752a60764c7e8bdd52b070c44d1a~mv2.png" alt="">

                                            </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>    
                    </div>     
            

                    <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="paralelogramo2" >
                                    <div class="texto2">
                                    <div class="row">
                                    <div class=" col-xs-7 col-sm-7 col-md-2"></div>
                                            <div class=" col-xs-7 col-sm-7 col-md-5" style="text-align: left;">
                                                    <div class="row" style=" color: #f5f5f5; font-size: 1.2rem; ">
                                                        TOTAL MEDALLAS
                                                    </div>
                                                    <div class="row" id="fechaac" style="font-size: 1.1rem;  color: #fff;  color: #f1e25f;;       font-weight: 600;">
                                                       ?
                                                    </div>
                                            </div>
                                            <div class=" col-xs-4 col-sm-4 col-md-4">
                                                <img width="40px" height="40px" src="https://images.vexels.com/media/users/3/127225/isolated/lists/db4a4f211ecd5f7c20ff7eb703fa18d6-reloj-de-pared-azul.png" alt="">

                                            </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>    
                    </div>                  


                </div>

                <div class="row" style="padding-top: 30px;">

                        <div class="col-xs-12 col-sm-12 col-md-4" style="padding-bottom: 10PX;">
                                <div class="paralelogramo" >
                                    <div class="texto">
                                        <div class="row" style="font-size: 1.4rem;  color: #fff; text-align: left;padding-left: 10px;  ">
                                            CURSO
                                        </div>
                                        <div class="row"  style=" color: #f1e25f; text-align: left;padding-left: 10px;">
                                            <span id="curso"></span>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4" style="padding-bottom: 10PX;">
                                <div class="paralelogramo" >
                                    <div class="texto">
                                        <div class="row" style="font-size: 1.4rem;  color: #fff; text-align: left;padding-left: 10px;  ">
                                            GRADO
                                        </div>
                                        <div class="row" style=" color: #f1e25f; text-align: left;padding-left: 10px;">
                                            <span id="grado" ></span>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4" style="padding-bottom: 10PX;">
                                <div class="paralelogramo" >
                                    <div class="texto">
                                        <div class="row" style="font-size: 1.4rem;  color: #fff; text-align: left;padding-left: 10px;  ">
                                            SEMANA
                                        </div>
                                        <div class="row" style=" color: #f1e25f; text-align: left;padding-left: 10px;">
                                            <span id="semana"></span>
                                        </div>
                                </div>
                            </div>
                        </div>


                </div>


                <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
                    <div class="col-xs-12 col-sm-12 col-md-12" id="paraimagen"></div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="row" id="titmensa" style=" text-align: center; padding-top: 20PX; padding-bottom: 10px; font-size: 35px;font-weight: bold;color: #fff373;letter-spacing: 2px;">
                    
                    </div>
                    </div>
                </div>

                <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                             <div class="row" id="subtitmensa"  style=" text-align: center; padding-bottom: 20px; padding-top:10px;color: #fff; font-weight: bold;font-size: 16px;letter-spacing: 2px;">
                    
                             </div>            
                        </div>
                </div>

           <div class="row" style=" text-align: center; padding-bottom: 10px; padding-top:10px;color: #fff; font-weight: bold;font-size: 16px;letter-spacing: 2px;">
                <div class="col-xs-12 col-sm-12 col-md-12">
                
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="row" style=" text-align: center; padding-bottom: 10px; padding-top:10px;color: #fff; font-weight: bold;font-size: 16px;letter-spacing: 2px;">
                            <span id="puntaje"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="row" style=" text-align: center; padding-bottom: 10px; padding-top:10px;color: #fff; font-weight: bold;font-size: 16px;letter-spacing: 2px;">
                            <span><strong id="puntaje2"> </strong> / <span id="puntajetot" style="color:#444;"></span></span>
                        </div>
                    </div>

                </div>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-2" "></div>  
                    <div class="col-xs-12 col-sm-12 col-md-8" style="height: 100px;">
                        <div class="barralec">
                            
                        </div>
                    </div>  
                    <div class="col-xs-12 col-sm-12 col-md-2" "></div>               
                </div>

              
              <div class="row" style="padding-bottom: 20px;">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="row" style="color: #fff; font-weight: bold;font-size: 14px; text-align: right;">
                            PREGUNTAS 
                          </div>
                          <div class="row" style="color: #fff; font-weight: bold;font-size: 14px; text-align: right;">
                             CONTESTADAS
                          </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-2">
                        <div class="row" id="totalpreguntas" style="color: #fff373; font-weight: bold;font-size: 40px; text-align: center;">
                            
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-6">
                       <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-5" style="text-align: right;">
                                 <div class="row" style= "color: #fff; font-weight: bold;font-size: 14px;">CORRESTAS: </div>
                                 <div class="row" style= "color: #fff; font-weight: bold;font-size: 14px;">ERRÓNEAS:</div>
                                <!-- <div class="row" style= "color: #87b3d4; font-weight: bold;font-size: 10px;">SIN CONTESTAR:</div>  -->
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-7" style="text-align: center;">
                                 <div class="row" id="correctas" style=" color: #fff; font-weight: bold;font-size: 14px;color: #fff373;"> </div>
                                 <div class="row" id="incorrectas" style=" color: #fff; font-weight: bold;font-size: 14px;color: #fff373;"> </div>
                                <!-- <div class="row" style=" color: #87b3d4; font-weight: bold;font-size: 10px;color: #fff373;">0 </div> -->
                            </div>
                       </div>

                    </div>
                </div>
              

           </div>


           <div class="row">
               
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <img style=" margin-left: auto; margin-right: auto; width: 120px;display: block;" class="img-responsive" src="../img/pamergamer/medallas/oro.png" alt="...">
                        <div style="text-align: center;font-size: 1.4rem;color: #fff; FONT-WEIGHT: BOLD;">ORO</div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <img style=" margin-left: auto; margin-right: auto; width: 120px;display: block;" class="img-responsive" src="../img/pamergamer/medallas/plata.png" alt="...">
                        <div style="text-align: center;font-size: 1.4rem;color: #fff; FONT-WEIGHT: BOLD;">PLATA</div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <img style=" margin-left: auto; margin-right: auto; width: 120px;display: block;" class="img-responsive" src="../img/pamergamer/medallas/bronce.png" alt="...">
                        <div style="text-align: center;font-size: 1.4rem;color: #fff; FONT-WEIGHT: BOLD;">BRONCE</div>
                    </div>
                </div>


                <div class="row" style="padding-top: 30PX;">
                   <div class="col-xs-12 col-sm-12 col-md-3"></div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <button type="button" id="btnRegresar" class="btn btn-primary btn-lg btn-block" style=" font-size: 18PX;
                        font-weight: bold;    BORDER-RADIUS: 1EM; background-color: #337ab7;
                         padding-bottom: 13PX; ">VER CURSOS</button>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3"></div>
                </div>



            </div>
            <div class="col-xs-12 col-sm-12 col-md-2"></div>
 


            </div>

            
           


           <!-- start modal  -->

           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

           <!-- end modal -->

                    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  
</body>


</html>

