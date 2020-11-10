<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


    <style>

body {
  background: linear-gradient(to bottom, #8c7a7a 0%, #af877c 65%, #af877c 100%) fixed;
  background: url("https://i.pinimg.com/originals/2d/e9/f6/2de9f63b5492b7d813728eb7d71c4279.jpg") no-repeat center center fixed!important;
  background-size: cover!important;
  
  color: #d5d5d5;

}

.cuerpo{
  background-color: #333333; color: #ffffff;

}
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 12px;
  background: #f5f5f5;
  outline: none;
  opacity: 0.7;
  border-radius: 0.3em;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 30px;
  height: 30px;
  background:#3e5bff;
;
  cursor: pointer;
  border-radius: 50%;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}

input:focus{
        outline: none;
    }
    .slider {
        -webkit-appearance: none;
        --range: calc(var(--max) - var(--min));
        --ratio: calc((var(--val) - var(--min))/var(--range));
        --sx: calc(.5*1.5em + var(--ratio)*(100% - 1.5em));
        margin: 0;
        padding: 0;
        width: 100%;
        height: 1.5em;
        background: transparent;
        font: 1em/1 arial, sans-serif;
        border: none;
    }
    .slider, .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
    }
    .slider::-webkit-slider-runnable-track {
        box-sizing: border-box;
        border: none;
        width: 12.5em;
        height: 0.5em;
        background: #ccc;
    }
    .js .slider::-webkit-slider-runnable-track {
        background: linear-gradient(#60a6d8, #60a6d8) 0/var(--sx) 100% no-repeat #ccc;
    }
    .slider::-moz-range-track {
        box-sizing: border-box;
        border: none;
        height: 0.5em;
        background: #ccc;
    }
    .slider::-ms-track {
        box-sizing: border-box;
        border: none;
        width: 12.5em;
        height: 0.5em;
        background: #ccc;
    }
    .slider::-moz-range-progress {
        height: 0.5em;
        background: #ffffff;
    }
    .slider::-ms-fill-lower {
        height: 0.5em;
        background: #ffffff;
    }
    .slider::-webkit-slider-thumb {
        margin-top: -0.550em;
        box-sizing: border-box;
        border: none;
        width: 1.5em;
        height: 1.5em;
        border-radius: 50%;
        background: #ffffff;
    }
    .slider::-moz-range-thumb {
        box-sizing: border-box;
        border: none;
        width: 1.5em;
        height: 1.5em;
        border-radius: 50%;
        background: #60a6d8;
    }
    .slider::-ms-thumb {
        margin-top: 0;
        box-sizing: border-box;
        border: none;
        width: 1.5em;
        height: 1.5em;
        border-radius: 50%;
        background: #ffffff;
    }
    .slider::-ms-tooltip {
        display: none;
    }
    #tickmarks {
        display: flex;
        justify-content: space-between;
        padding: 0 10px;
    }

    #tickmarks p {
        position: relative;
        display: flex;
        justify-content: center;
        text-align: center;
        width: 1px;
        background: #D3D3D3;
        height: 10px;
        line-height: 40px;
        margin: 0 0 20px 0;
    }


 </style>

  </head>
  <body class="cuerpo" >
    
  <div id="numpreg" style="display:none;">1</div>
    
    <div class="container" id="test">
         
     
          <div class="row" style=" padding-bottom: 10px; text-align: center; font-size: 30px; font-family: ui-serif; margin-top: 10%;">
            <div class="col-md-12" id="nominte"></div>
          </div>
          <div class="row" style="padding-bottom: 20px;text-align: center; font-size: 20px; font-family: ui-serif; ">
            <div class="col-md-10"></div>
            <div class="col-md-2" id="Nropregunta"> </div>
          </div>
          <div class="row" style=" font-size: 25px; font-family: ui-serif; ">
              <div class="col-md-2"></div>
            
              <div class="col-md-8" id="pregunta"></div>
            <div class="col-md-1">
              <img style="width: 40px; float: left;" class="img-responsive" src="https://images.vexels.com/media/users/3/200073/isolated/lists/6ba3543797b16451883ae2535942264d-icono-de-pregunta-plana.png" alt="">
            </div>

          </div>

          <div class="row" style="  text-align: center; font-size: 30px; font-family: ui-serif; margin-top: 10%;">
            <div class="col-md-12"> 
               
              
              <div class="row" style="font-size: 20px;">

              <div class="col-md-1"></div>
              <div class="col-md-10">
                
                <div class="slidecontainer">
                  <input id="valor" type="range" min="0" max="80" value="0" step='20' class="slider" id="myRange" list='tickmarks'>
          
                  <div id="tickmarks">
                      <p >Nunca</p>
                      <p>Pocas<span style="padding-left: 5px;">veces</p>
                      <p>Alguna<span style="padding-left: 5px;">veces</span></p>
                      <p>Frecuentemente</p>
                      <p>Siempre</p>
                      
                  </div>
          
              </div>

              </div>
              <div class="col-md-1"></div>

              </div>
               
              <div class="row" style="padding-top: 33px;">
                <div class="col-md-5"></div>
                <div class="col-md-2">
                   
                   <button type="button" id="btnSiguiente" class="btn btn-large btn-block btn-default" style="
                   background-color: #7cb200; font-family: Verdana, Geneva, Tahoma, sans-serif; border: 0px; border-radius: 1em; font-size: 20px; padding: 10px; color: #f5f5f5;">Siguiente</button>

                  <button type="button" id="btnFinalizar" class="btn btn-large btn-block btn-default" style="
                   background-color: #7cb200; font-family: Verdana, Geneva, Tahoma, sans-serif; border: 0px; border-radius: 1em; font-size: 20px; padding: 10px; color: #f5f5f5;">Finalizar</button>
                   
                </div>
                <div class="col-md-5"></div>
              </div>
              <div class="row" style="font-size: 20px; font-family: ui-serif; padding: 12px; padding-top: 45px; text-align: center;">
         
                <div class="col-md-12"> Material utilizado con fines educativos.</div>
              </div>

            </div>
          </div>

    </div>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

 <script>
   const _R = document.querySelector('[type=range]');
    _R.style.setProperty('--val', +_R.value);
    _R.style.setProperty('--max', +_R.max);
    _R.style.setProperty('--min', +_R.min);

    document.documentElement.classList.add('js');

    _R.addEventListener('input', e => {
        _R.style.setProperty('--val', +_R.value);
    }, false);
 </script>
  </body>
</html>