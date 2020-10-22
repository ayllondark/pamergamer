<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Clash of Clans Cards</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css'>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

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


/* */


  .skin-blue .wrapper{
    background-color: unset!important;

  }

  
  



@import url("https://fonts.googleapis.com/css?family=Baloo+Bhaijaan&display=swap");
body {
 

  
}

.loading {
  align-items: center;
  text-align: center;
  justify-content: center;
  margin-bottom: 10%;
  display: flex;
  color: white;
  font-size: 2em;
  font-family: "Baloo Bhaijaan", cursive;
  text-transform: uppercase;
}
.loading span {
  text-shadow: 0 1px #bbb, 0 2px #bbb, 0 3px #bbb, 0 4px #bbb, 0 5px #bbb, 0 6px transparent, 0 7px transparent, 0 8px transparent, 0 9px transparent, 0 10px 10px rgba(0, 0, 0, 0.4);
  transform: translateY(20px);
  animation: bounce 0.3s ease infinite alternate;
}

@keyframes bounce {
  to {
    text-shadow: 0 1px #bbb, 0 2px #bbb, 0 3px #bbb, 0 4px #bbb, 0 5px #bbb, 0 6px #bbb, 0 7px #bbb, 0 8px #bbb, 0 9px #bbb, 0 50px 25px rgba(0, 0, 0, 0.2);
    transform: translateY(-20px);
  }
}


.logo {
  padding: 0 1rem;
  margin: 1rem;
  align-items: center;
  text-align: center;
  justify-content: center;
}

.logocentro {
  background-color: yellow;
  
  /* IMPORTANTE */
  width: 200px;
  margin-left: auto;
  margin-right: auto;
}



</style>

<body>

  <header>
    <h1><!-- Hola, Juan Manuel -->.</h1>
    </header>




        <div class="logo">
        <img class="animate__animated animate__pulse animate__repeat-3" src="../img/logo-retopamer.png" alt="">
        </div>



<div class="loading">Cargando...</div>


<!-- partial -->


<script type="text/javascript">
  let loading = document.querySelector(".loading");
let letters = loading.textContent.split("");
loading.textContent = "";
letters.forEach((letter, i) => {
  let span = document.createElement("span");
  span.textContent = letter;
  span.style.animationDelay = `${i / 10}s`;
  loading.append(span);
});

</script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>