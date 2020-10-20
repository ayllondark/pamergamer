<!DOCTYPE html>
<html lang="en">
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




.slide-container {
  margin: auto;
  width: 600px;
  text-align: center;
}

.wrapper {
  padding-top: 60px;
  padding-bottom: 40px;
}
.wrapper:focus {
  outline: 0;
}

.clash-card {
  background: white;
  width: 250px;
  display: inline-block;
  margin: auto;
  border-radius: 19px;
  position: relative;
  text-align: center;
  box-shadow: -1px 15px 30px -12px black;
  z-index: 9999;
}

.clash-card__image {
  position: relative;
  height: 200px;
  border-top-left-radius: 14px;
  border-top-right-radius: 14px;
}

.clash-card__image--barbarian {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/barbarian-bg.jpg");
}
.clash-card__image--barbarian img {
  width: 200px;
  position: absolute;
  top: -65px;
  left: 50px;
}

.clash-card__image--archer {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/archer-bg.jpg");
}
.clash-card__image--archer img {
  width: 400px;
  position: absolute;
  top: -34px;
  left: -37px;
}

.clash-card__image--giant {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/giant-bg.jpg");
}
.clash-card__image--giant img {
  width: 340px;
  position: absolute;
  top: -30px;
  left: -25px;
}

.clash-card__image--goblin {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/goblin-bg.jpg");
}
.clash-card__image--goblin img {
  width: 370px;
  position: absolute;
  top: -21px;
  left: -37px;
}

.clash-card__image--wizard {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/wizard-bg.jpg");
}
.clash-card__image--wizard img {
  width: 345px;
  position: absolute;
  top: -28px;
  left: -10px;
}

.clash-card__level {
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 700;
  margin-bottom: 3px;
}

.clash-card__level--barbarian {
  color: #EC9B3B;
}

.clash-card__level--archer {
  color: #EE5487;
}

.clash-card__level--giant {
  color: #F6901A;
}

.clash-card__level--goblin {
  color: #82BB30;
}

.clash-card__level--wizard {
  color: #4FACFF;
}

.clash-card__unit-name {
  font-size: 26px;
  color: black;
  font-weight: 900;
  margin-bottom: 5px;
}

.clash-card__unit-description {
  padding: 20px;
  margin-bottom: 10px;
}

.clash-card__unit-stats--barbarian {
  background: #EC9B3B;
}
.clash-card__unit-stats--barbarian .one-third {
  border-right: 1px solid #BD7C2F;
}

.clash-card__unit-stats--archer {
  background: #EE5487;
}
.clash-card__unit-stats--archer .one-third {
  border-right: 1px solid #D04976;
}

.clash-card__unit-stats--giant {
  background: #F6901A;
}
.clash-card__unit-stats--giant .one-third {
  border-right: 1px solid #de7b09;
}

.clash-card__unit-stats--goblin {
  background: #82BB30;
}
.clash-card__unit-stats--goblin .one-third {
  border-right: 1px solid #71a32a;
}

.clash-card__unit-stats--wizard {
  background: #4FACFF;
}
.clash-card__unit-stats--wizard .one-third {
  border-right: 1px solid #309eff;
}

.clash-card__unit-stats {
  color: white;
  font-weight: 700;
  border-bottom-left-radius: 14px;
  border-bottom-right-radius: 14px;
}
.clash-card__unit-stats .one-third {
  width: 100%;
  float: left;
  padding: 20px 15px;
}
.clash-card__unit-stats sup {
  position: absolute;
  bottom: 4px;
  font-size: 45%;
  margin-left: 2px;
}
.clash-card__unit-stats .stat {
  position: relative;
  border: 1px solid #ffffff;
  padding-top: 6px;
  padding-bottom: 6px;
  border-radius: 8px;
  font-size: 24px;
  margin-bottom: 10px;
}
.clash-card__unit-stats .stat-value {
  text-transform: uppercase;
  font-weight: 400;
  font-size: 12px;
}
.clash-card__unit-stats .no-border {
  border-right: none;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}

.slick-prev {
  left: 100px;
  z-index: 999;
}

.slick-next {
  right: 100px;
  z-index: 999;
}

#avatares{
  margin-top: 60px;
}

/* */

  .skin-blue .wrapper{
    background-color: unset!important;

  }

  
  /* Cuadro Nick */
  #nick h2{
    letter-spacing: 2px;
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

</style>

<body>

  <header>
    <h1><!-- Hola, Juan Manuel -->.</h1>
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

<div id="message" style="display: none;"></div>


<!-- partial -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>