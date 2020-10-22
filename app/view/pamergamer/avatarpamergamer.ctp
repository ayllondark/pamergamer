<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Clash of Clans Cards</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css'>

</head>

<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Lato:400,700,900);
*, *:before, *:after {
  box-sizing: border-box;
}

body {
  background: linear-gradient(to bottom, #8c7a7a 0%, #af877c 65%, #af877c 100%) fixed;
  background: url("../img/fondopamergamer.png") no-repeat center center fixed!important;
  background-size: cover!important;
  font: 14px/20px "Lato", Arial, sans-serif;
  color: #9E9E9E;
  margin-top: 0px;
}



/* Inicio Elige Sexo */
  form {
  max-width: 250px;
  position: relative;
  margin: 50px auto 0;
  font-size: 15px;
}

.radiobtn {
  position: relative;
  display: block;
}
.radiobtn label {
  display: block;
  background: #fff59e;
  color: #444;
  border-radius: 5px;
  padding: 10px 20px;
  border: 2px solid #c3bd85;
  margin-bottom: 5px;
  cursor: pointer;
}
.radiobtn label:after, .radiobtn label:before {
  content: "";
  position: absolute;
  right: 11px;
  top: 11px;
  width: 20px;
  height: 20px;
  border-radius: 3px;
  background: #fdcb77;
}
.radiobtn label:before {
  background: transparent;
  transition: 0.1s width cubic-bezier(0.075, 0.82, 0.165, 1) 0s, 0.3s height cubic-bezier(0.075, 0.82, 0.165, 2) 0.1s;
  z-index: 2;
  overflow: hidden;
  background-repeat: no-repeat;
  background-size: 13px;
  background-position: center;
  width: 0;
  height: 0;
  background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNS4zIDEzLjIiPiAgPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTE0LjcuOGwtLjQtLjRhMS43IDEuNyAwIDAgMC0yLjMuMUw1LjIgOC4yIDMgNi40YTEuNyAxLjcgMCAwIDAtMi4zLjFMLjQgN2ExLjcgMS43IDAgMCAwIC4xIDIuM2wzLjggMy41YTEuNyAxLjcgMCAwIDAgMi40LS4xTDE1IDMuMWExLjcgMS43IDAgMCAwLS4yLTIuM3oiIGRhdGEtbmFtZT0iUGZhZCA0Ii8+PC9zdmc+);
}
.radiobtn input[type="radio"] {
  display: none;
  position: absolute;
  width: 100%;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.radiobtn input[type="radio"]:checked + label {
  background: #fff59e;
  -webkit-animation-name: blink;
          animation-name: blink;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  border-color: #c3bd85;
}
.radiobtn input[type="radio"]:checked + label:after {
  background: #FFC107;
}
.radiobtn input[type="radio"]:checked + label:before {
  width: 20px;
  height: 20px;
}

@-webkit-keyframes blink {
  0% {
    background-color: #fdcb77;
  }
  10% {
    background-color: #fdcb77;
  }
  11% {
    background-color: #fdd591;
  }
  29% {
    background-color: #fdd591;
  }
  30% {
    background-color: #fdcb77;
  }
  50% {
    background-color: #fdd591;
  }
  45% {
    background-color: #fdcb77;
  }
  50% {
    background-color: #fdd591;
  }
  100% {
    background-color: #fdcb77;
  }
}

@keyframes blink {
  0% {
    background-color: #fdcb77;
  }
  10% {
    background-color: #fdcb77;
  }
  11% {
    background-color: #fdd591;
  }
  29% {
    background-color: #fdd591;
  }
  30% {
    background-color: #fdcb77;
  }
  50% {
    background-color: #fdd591;
  }
  45% {
    background-color: #fdcb77;
  }
  50% {
    background-color: #fdd591;
  }
  100% {
    background-color: #fdcb77;
  }
}
/* Fin Elige Sexo */




/* */

  .skin-blue .wrapper{
    background-color: unset!important;

  }

  
  /* Cuadro Nick */
  #nick h2{
    /*letter-spacing: 2px;*/
    font-size: 3.2em;
    margin: 0;
    color: #666;
  }

  #nick input {
/*  background: rgba(255, 13, 254, 0.90); */
  width: 210px;
  display: inline-block;
  text-align: center;
  border-radius: 7px;
  background: #eee;
  padding: 1em 2em;
  outline: none;
  border: none;
  color: #222;
  transition: 0.3s linear;
}
::placeholder{color: #999;}
#nick input:focus {background: rgba(0, 0, 333, 0.10);}

#nick button {
  background-image: linear-gradient(to left, #1a598b 0%, #03A9F4 100%);
  font-family: 'Abel', sans-serif;
  padding: 0.5em 1.9em;
  margin: 2.3em 0 0 0;
  border-radius: 7px;
  font-size: 1.4em;
  cursor: pointer;
  color: #FFFFFF;
  font-size: 1em;
  outline: none;
  border: none;
  transition: 0.3s linear;

}
#nick button:hover{transform: translatey(2px);}
#nick button:active{transform: translatey(5px);}


#titulosexo {
    color: #fff;
    font-weight: bold;
    font-size: 2em;
    margin-bottom: 20px;
}

.container-avatar{
  margin-top: 50px;
}

#regresar{
  margin-top: 0px;
  color: #fff;
  font-weight: bold;
}

#regresar a {
  color:#fff;
  font-weight: bold;
  text-decoration: none;
  border-bottom: 2px solid #0fafbb;
}

#message{
    color: #fff;
    font-weight: bold;
    font-size: 20px;
    background: #FF9800;
    padding: 8px 2px 8px 28px;
    width: 25%;
    border-radius: 4px;
}


/* start cards */
header {
        width: 100%;
        background-color: #77cdb4;
        text-align: center;
    }
    
    h1 {
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 2.3em;
    }
    
    em {
        color: #232027;
    }
    
    .wrapper {
        width: 80%;
        margin: 40px auto;
    }
    
    div.gallery {
        margin-top: 30px;
        background-color: #232027;
    }
    
    div.gallery ul {
        list-style-type: none;
        margin-left: 35px;
    }
    /* animation */
    
    div.gallery ul li,
    div.gallery li img {
        -webkit-transition: all 0.1s ease-in-out;
        -moz-transition: all 0.1s ease-in-out;
        -o-transition: all 0.1s ease-in-out;
        transition: all 0.1s ease-in-out;
    }
    
    div.gallery ul li {
        position: relative;
        float: left;
        width: 130px;
        height: 130px;
        margin: 5px;
        padding: 5px;
        z-index: 0;
    }
    /* Make sure z-index is higher on hover */
    /* Ensure that hover image overlapped the others */
    
    div.gallery ul li:hover {
        z-index: 5;
    }
    /* Image is position nicely under li */
    
    div.gallery ul li img {
        position: absolute;
        left: 0;
        top: 0;
        /* border: 1px solid #dddddd; */
        padding: 5px;
        width: 130px;
        height: 130px;
        background: #f0f0f0;
    }
    
    div.gallery ul li img:hover {
        width: 200px;
        height: 200px;
        margin-top: -130px;
        margin-left: -130px;
        top: 65%;
        left: 65%;
    }
    
    p.attribution {
        font-family: 'Consolas';
        color: #000;
        clear: both;
        text-align: center;
        line-height: 25px;
        padding-top: 30px;
    }
    
    p.attribution a {
        color: #4c8d7c;
    }
    /* Responsive hack */
    
    @media only screen and (min-width: 499px) and (max-width: 1212px) {
        .wrapper {
            width: 500px;
        }
    }
    
    @media only screen and (max-width: 498px) {
        .wrapper {
            width: 300px;
        }
        div.gallery ul {
            list-style-type: none;
            margin: 0;
        }
    }
/* end cards */


</style>

<body>

  <header>

    </header>







<span id="regresar" style="display: none;"> <a href="">Regresar</a></span>

    <div id="suavatar" style="display: none;"></div>
    <div id="sunick"></div>


<form id="entrada">
  <p id="titulosexo">Identificate</p>
  <div class="radiobtn">
    <input type="radio" id="huey" class="elboton"
           name="drone" value="M" />
    <label for="huey">Hombre</label>
  </div>

  <div class="radiobtn">
    <input type="radio" id="dewey" class="elboton"
           name="drone" value="F" />
    <label for="dewey">Mujer</label>
  </div>

</form>


<!-- partial:index.partial.html -->
<div class="container-avatar">
  

  
</div> <!-- end container -->

<div id="nick" style="display: none; position: absolute; text-align: center; top: 50%; left: 50%; transform: translate(-50%, -50%)">
  
  <h2 style="color:#fff;"> Ingrese Nick</h2>
  <p style="margin-top: 30px;"><input type="text" id="txtnick" placeholder="Ingrese su Nick" required> </p>
  <br>
    <button id="btnRegistrar">Registrar</button>

</div>

<div class="container">


        <div class="row" a>
            <img style="margin-left: auto; margin-right: auto;display: block;" src="logo-retopamer.png" alt="">
        </div>

        <h1 style="color: #f5f5fD;" id="tituloavatar">ELIGE TU AVATAR</h1>

        <div class="row">



            <div class="wrapper">
                <div class="gallery">
                    <ul>
                        
                    </ul>
                </div>

            </div>


        </div>



    </div>



<div id="message" style="display: none;"></div>


<!-- partial -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>