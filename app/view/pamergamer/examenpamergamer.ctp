<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pamer Gamer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>    

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

    </style>
</head>

<body>

<div class="container-fluid" >
           <BR>

           <div id="semanaexamen" style="display:none;"></div>
            <div id="cursoexamen" style="display:none;"></div>
            
        <div class="row" >
           
            <div class="col-xs-12 col-sm-12 col-md-9">
                 
                 <div class="row" style="padding-bottom: 20px;">
                    <div class="col-xs-12 col-sm-12 col-md-4" style="padding-bottom: 10PX;">
                        <div class="paralelogramo2" >
                            <div class="texto2">
                               <div class="row">
                                      <div class=" col-xs-3 col-sm-3 col-md-3" id="imgavatar">
                                          
                                      </div>
                                      <div class=" col-xs-4 col-sm-4 col-md-5">
                                            <div class="row" id="avatar" style="font-size: 2rem;  color: #fff;       font-weight: 600;">
                                                
                                            </div>
                                            <div class="row" style="margin-bottom: 0.4rem; color: #f5f5f5; font-size: 1.2rem; ">
                                                NICK
                                            </div>
                                            <div class="row" id="nomavatar" style="font-size: 2rem;  color: #fff;  color: #f1e25f;;       font-weight: 600;">
                                                
                                            </div>
                                      </div>
                                      <div class=" col-xs-4 col-sm-4 col-md-4">
                                        <img width="40px" height="40px" src="https://static.wixstatic.com/media/e5be46_e84e752a60764c7e8bdd52b070c44d1a~mv2.png" alt="">

                                      </div>
                                  
                               </div>
                               
                          </div>
                    </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-4" style="padding-bottom: 10PX;">
                        <div class="paralelogramo2" >
                            <div class="texto2">
                               <div class="row">
                                
                                      <div class=" col-xs-7 col-sm-7 col-md-7">
                                            <div class="row" style=" color: #f5f5f5; font-size: 1.2rem; ">
                                                Fecha
                                            </div>
                                            <div class="row" id="fechaac" style="font-size: 1rem;  color: #fff;  color: #f1e25f;;       font-weight: 600;">
                                                
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

                <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-3" style="padding-bottom: 10PX;">
                                <div class="paralelogramo" >
                                    <div class="texto">
                                        <div class="row" style="font-size: 1.4rem;  color: #fff;  ">
                                            CURSO
                                        </div>
                                        <div class="row" id="nomcurso" style=" color: #f1e25f;">
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-xs-12 col-sm-12 col-md-3" style="padding-bottom: 10PX;">
                                <div class="paralelogramo" >
                                    <div class="texto">
                                        <div class="row" style="font-size: 1.4rem;  color: #fff;  ">
                                            GRADO
                                        </div>
                                        <div class="row" id="nomgrado" style=" color: #f1e25f;">
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-xs-12 col-sm-12 col-md-3" style="padding-bottom: 10PX;">
                                <div class="paralelogramo" >
                                    <div class="texto">
                                        <div class="row" style="font-size: 1.4rem;  color: #fff;  ">
                                            SEMANA
                                        </div>
                                        <div class="row" id="numsemana" style=" color: #f1e25f;">
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3" style="padding-bottom: 10PX;">
                            <div class="paralelogramo" >
                                <div class="texto">
                                    <div class="row" style="font-size: 1.4rem;  color: #fff;  ">
                                        N° PREG.
                                    </div>
                                    <div class="row" id="totpreg" style=" color: #f1e25f;">
                                        
                                    </div>
                            </div>
                        </div>
                    </div>
              
                </div>
                
                <div class="row" style="padding-top: 20px;">
                    <div class="col-xs-6 col-sm-6 col-md-2" style=" opacity: 0.9; border: 1px solid #286090;margin-top: 25px; border-radius: 1.3em;background: #104e7d; padding-bottom: 15px; padding-top: 10px;">
                       
                        <div class="row" style="padding-top: 5px;">
                            <img style=" margin-left: auto; margin-right: auto; width: 70px;display: block;" class="img-responsive" src="https://www.libreriareleer.es/img/logo-libro.png" alt="...">
                              <div style="text-align: center;font-size: 1.4rem;color: #fff; FONT-WEIGHT: BOLD;" >LIBROS</div>    
                         </div>
                         <div class="row" style="padding-top: 5px;">
                            <img style=" margin-left: auto; margin-right: auto; width: 70px;display: block;" class="img-responsive" src="https://www.libreriareleer.es/img/logo-libro.png" alt="...">
                              <div style="text-align: center;font-size: 1.4rem;color: #fff; FONT-WEIGHT: BOLD;">PISTAS</div>    
                         </div>
                         <div class="row" style="padding-top: 5px;">
                            <img style=" margin-left: auto; margin-right: auto; width: 70px;display: block;" class="img-responsive" src="https://www.libreriareleer.es/img/logo-libro.png" alt="...">
                              <div style="text-align: center;font-size: 1.4rem;color: #fff; FONT-WEIGHT: BOLD;">CLAVES</div>    
                         </div>
                         <div class="row" style="padding-top:5px;">
                            <img style=" margin-left: auto; margin-right: auto; width: 70px;display: block;" class="img-responsive" src="https://www.libreriareleer.es/img/logo-libro.png" alt="...">
                              <div style="text-align: center;font-size: 1.4rem;color: #fff;FONT-WEIGHT: BOLD;">SOLUCIÓN</div>    
                         </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-10" id="imagenpregunta" style="opacity: 0.9;border-radius: 1.3em;background: #104e7d; padding-bottom: 18PX;">
                        
                    </div>

                </div>  
        
               <div class="row">
                   <div class="col-xs-12 col-sm-12 col-md-4"></div>
                   <div class="col-xs-12 col-sm-12 col-md-5">

                   <div class="row" style="padding-top: 30PX; padding-bottom: 20px;">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="button" id="btnGuardar" class="btn btn-info btn-lg btn-block" style=" font-size: 22PX;letter-spacing: 2px;
                        font-weight: bold;    BORDER-RADIUS: 0.8EM; background-color: #337ab7;;
                         padding-bottom: 13PX; ">FINALIZAR JUEGO</button>
                    </div>
                </div>

                   </div>
               </div>
            
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                  
                <div class="row" style=" text-align: center; padding-top: 100PX; padding-bottom: 10px; font-size: 30px;font-weight: bold;color: #fff373;letter-spacing: 5px;">
                    <span  >ÚLTIMO RESULTADO</span>
                </div>
                <div class="row" style=" text-align: center; padding-bottom: 20px; padding-top:10px;color: #fff; font-weight: bold;font-size: 16px;letter-spacing: 2px;">
                    <span></span>
                </div>

               <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                 <img style=" margin-left: auto; margin-right: auto; width: 150px;display: block;" class="img-responsive" src="https://www.libreriareleer.es/img/logo-libro.png" alt="..."> 
                </div>



                <div class="row" style="padding-bottom: 20px;">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="row" style="color: #87b3d4; font-weight: bold;font-size: 13px; text-align: right;">
                            PREGUNTAS 
                          </div>
                          <div class="row" style="color: #87b3d4; font-weight: bold;font-size: 13px; text-align: right;">
                             CONTESTADAS
                          </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-3">
                        <div class="row" id="totalpreguntas" style="color: #fff373; font-weight: bold;font-size: 35px; text-align: center;">
                            0
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-5">
                       <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8" style="text-align: right;">
                                 <div class="row" style= "color: #87b3d4; font-weight: bold;font-size: 10px;">CORRESTAS: </div>
                                 <div class="row" style= "color: #87b3d4; font-weight: bold;font-size: 10px;">ERRÓNEAS:</div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4" style="text-align: center;">
                                 <div class="row" id="pcorrectas" style=" color: #87b3d4; font-weight: bold;font-size: 10px;color: #fff373;"> 0</div>
                                 <div class="row" id="pincorrectas" style=" color: #87b3d4; font-weight: bold;font-size: 10px;color: #fff373;"> 0</div>
                            </div>
                       </div>

                    </div>
                </div>
                
                <div class="row">
                 
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <img style=" margin-left: auto; margin-right: auto; width: 100px;display: block;" class="img-responsive" src="../img/pamergamer/medallas/oro.png" alt="...">
                        <div style="text-align: center;font-size: 1.4rem;color: #fff; FONT-WEIGHT: BOLD;">ORO</div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <img style=" margin-left: auto; margin-right: auto; width: 100px;display: block;" class="img-responsive" src="../img/pamergamer/medallas/plata.png" alt="...">
                        <div style="text-align: center;font-size: 1.4rem;color: #fff; FONT-WEIGHT: BOLD;">PLATA</div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <img style=" margin-left: auto; margin-right: auto; width: 100px;display: block;" class="img-responsive" src="../img/pamergamer/medallas/bronce.png" alt="...">
                        <div style="text-align: center;font-size: 1.4rem;color: #fff; FONT-WEIGHT: BOLD;">BRONCE</div>
                    </div>
                </div>

             
              

            </div>

        </div>

    </div>
 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  
</body>


</html>

