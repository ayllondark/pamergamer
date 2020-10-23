<!DOCTYPE html>

<html lang="es">

<head>

    <title>Columnas múltiples en CSS3 - campusMVP.es</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>



    <style type="text/css">



        body {

  background: linear-gradient(to bottom, #8c7a7a 0%, #af877c 65%, #af877c 100%) fixed;

 /* background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/coc-background.jpg") no-repeat center center fixed!important; */
<<<<<<< HEAD
background: url("https://i.pinimg.com/originals/06/a8/5b/06a85b703ccc50fcc2214bac56214f48.gif") no-repeat center center fixed!important;
=======
background: url("../img/fondopamergamer.jpeg") no-repeat center center fixed!important;
>>>>>>> dcadef4c36c0f7ca2734f9ab726685ece395be30

  background-size: cover!important;

  font: 14px/20px "Lato", Arial, sans-serif;

  color: #fff;

  margin-left: 20px;

  margin-top: 0px;

}



hr {

    border: 2px solid #0FAFBB;

}

/* Inicio Barra de Progreso */

.barra { 

    height: 10px;

    position: relative;

    background: #555;

    border-radius: 15px;

    padding: 5px;

     box-sizing: unset!important;

}

.barra > span {

  display: block;

  height: 100%;

  border-top-right-radius: 8px;

  border-bottom-right-radius: 8px;

  border-top-left-radius: 20px;

  border-bottom-left-radius: 20px;

  background-color: #22AA11;

  position: relative;

  overflow: hidden;

  animation: prog 2s linear;

}

@keyframes prog {

  0% {width: 0%}

  100% {width: 100%}

}

/* Fin Barra de Progreso */



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

@keyframes prog {

  0% {width: 0%}

  100% {width: 100%}

}

/* Fin Barra de Progreso de Cards */



.perfil{

    text-align: left;

    font-weight: bold;

}



.detperfil{

    color: #0FAFBB;

}



img {

    /* margin-top: 10px; */

    }



.icoavatar{

    width: 20%;
    text-align: right;

}



.armadura{

    margin-top: 10px;

    width: 50%;

}




/* Estilos para los Tabs Lecturas */


/*CAMBIOS EDGAR2020*/
.bg-dark {
/* background-color: #115899!important; */
background-color: #104e7d!important;
    opacity: 0.9;
    letter-spacing: 1px;
    font-family: system-ui;

}



.nav-tabs {

    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);

    border: none;

}

.nav-tabs .nav-link{

    border: none;

    border-radius: 0;

    transition: color .2s ease-out;

}

.tabs-dark .nav-link {

    color: #f1e25f;
    font-size: 0.9em;
    font-weight: 600;

}

.tabs-light .nav-link {

    color: rgba(0,0,0,.5);

}

.tabs-dark .nav-link:not(.active):hover {

    color: #aeb0b3;

}

.tabs-light .nav-link:not(.active):hover {

    color: #495057;

}



.nav-pills .nav-link{

    border-radius: 2px;

    color: #495057;

    transition: color .2s ease-out, box-shadow .2s;

}

.nav-pills .nav-link:hover{

    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);

    

}

.nav-pills .nav-item {

    margin: 0 5px;

}

.nav-pills.pills-dark .nav-link.active {

    background-color: #343a40!important;

    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);

}

.nav-pills.pills-dark .nav-link:not(.active):hover {

    color: #1d1e22;

}

.tabs-marker .nav-link {

    position: relative;

}

.tabs-marker .nav-link.active .marker {

    height: 30px;

    width: 30px;

    left: 50%;

    bottom: -30px;

    transform: translatex(-50%);

    position: absolute;

    overflow: hidden;

}

.tabs-marker .nav-link.active .marker:after {

    content: "";

    height: 15px;

    width: 15px;

    top: -8px;

    left: 50%;

    transform: rotate(45deg) translatex(-50%);

    transform-origin: left;

    background-color: #fff;

    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);

    position: absolute;

}





.online{

  width: 20%;

  margin-right: 12px;

  text-align: center;;

}

/* Fin Estilo para los Tabs Lecturas */





/* Inicio Estilos Cards */

body {

  font-family: 'proxima-nova-soft', sans-serif;

  font-size: 14px;

  -webkit-font-smoothing: antialiased;

  -moz-osx-font-smoothing: grayscale;

}



.nav > li > a:hover, .nav > li > a, .nav > li > a {

    color: #444;

    background: none;

}

.entrar{

/*CAMBIO EDGAR*/
       width: 100%; /* ADD*/
    color: #fff;

    background-color: #0FAFBB;

    font-size: 1.3rem!important;

  /*  border-color: #0FAFBB;*/

    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);

}



.pordesa{

    margin-top: 8px;

}





.post-module {

  position: relative;

  z-index: 1;

  display: block;

  height: 260px;

  -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);

  -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);

  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);

  -webkit-transition: all 0.3s linear 0s;

  -moz-transition: all 0.3s linear 0s;

  -ms-transition: all 0.3s linear 0s;

  -o-transition: all 0.3s linear 0s;

  transition: all 0.3s linear 0s;

}

.post-module:hover,

.hover {

  -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);

  -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);

  box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);

}



.thumbnail{

  padding: 0px!important;
  border-radius: 15px;

}



.post-module:hover .thumbnail img,

.hover .thumbnail img {

  -webkit-transform: scale(1.1);

  -moz-transform: scale(1.1);

  transform: scale(1.1);

  opacity: 0.6;

}

.post-module .thumbnail {

  background: #00000070;

  height: 150px;

  overflow: hidden;

  border:  0px;

}

.post-module .thumbnail .date {

  position: absolute;

  top: 20px;

  right: 20px;

  z-index: 1;

  background: #e74c3c;

  width: 55px;

  height: 55px;

  padding: 12.5px 0;

  -webkit-border-radius: 100%;

  -moz-border-radius: 100%;

  border-radius: 100%;

  color: #FFFFFF;

  font-weight: 700;

  text-align: center;

  -webkti-box-sizing: border-box;

  -moz-box-sizing: border-box;

  box-sizing: border-box;

}

.post-module .thumbnail .date .day {

  font-size: 18px;

}

.post-module .thumbnail .date .month {

  font-size: 12px;

  text-transform: uppercase;

}

.post-module .thumbnail img {

  display: block;

  width: 50%;

  -webkit-transition: all 0.3s linear 0s;

  -moz-transition: all 0.3s linear 0s;

  -ms-transition: all 0.3s linear 0s;

  -o-transition: all 0.3s linear 0s;

  transition: all 0.3s linear 0s;

}

/* CAMBIOS EDGAR2020 */
.post-module .post-content {
  
  position: absolute;

  bottom: 0;
  FONT-FAMILY: system-ui;
  background: #104e7d;
  opacity: 0.9;

  width: 100%;

  padding: 10px;

  -webkti-box-sizing: border-box;

  -moz-box-sizing: border-box;

  box-sizing: border-box;

  -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;

  -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;

  -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;

  -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;

  transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;

}

.post-module .post-content .category {

  position: absolute;

  top: -25px;

  left: 0;

  background: #0288d4;

  padding: 5px 10px;

  color: #FFFFFF;

  font-size: 10px;

  font-weight: 600;

  text-transform: uppercase;

}

.post-module .post-content .title {

  margin: 0;

  color: #333333;

  font-size: 26px;

  font-weight: 700;

}

.post-module .post-content .sub_title {

  margin: 0;

  padding: 0 0 6px;

  color: #f1e25f;

  font-size: 16px;

  font-weight: 400;

}

.post-module .post-content .description {

  display: none;

  color: #666666;

  font-size: 14px;

  line-height: 1.8em;

}

.post-module .post-content .post-meta {

  color: #999999;
  font-size: 14px;

}

.post-module .post-content .post-meta .timestamp {

  margin: 0 16px 0 0;
  color: #fff;

}

.post-module .post-content .post-meta a {

  color: #999999;

  text-decoration: none;

}

.hover .post-content .description {

  display: block !important;

  height: auto !important;

  opacity: 1 !important;

}

.container {

  max-width: 100%;
  /* max-width: 800px;*/
  min-width: 640px;

  margin: 0 auto;

}

.container:before,

.container:after {

  content: '';

  display: block;

  clear: both;

}

.container .column {

  width: 30%;

  padding: 0 25px;

  -webkti-box-sizing: border-box;

  -moz-box-sizing: border-box;

  box-sizing: border-box;

  float: left;

  margin-top: 25px;

}

.container .column .demo-title {

  margin: 0 0 15px;

  color: #666666;

  font-size: 18px;

  font-weight: bold;

  text-transform: uppercase;

}

.container .info {

  width: 300px;

  margin: 50px auto;

  text-align: center;

}

.container .info h1 {

  margin: 0 0 15px;

  padding: 0;

  font-size: 24px;

  font-weight: bold;

  color: #333333;

}

.container .info span {

  color: #666666;

  font-size: 12px;

}

.container .info span a {

  color: #000000;

  text-decoration: none;

}

.container .info span .fa {

  color: #e74c3c;

}

/* Fin Estilo Cards */





.fecha {

    position: absolute;

    top: 20px;

    right: 20px;

    z-index: 1;

    background: #e74c3c;

    width: 55px;

    height: 55px;

    padding: 12.5px 0;

    -webkit-border-radius: 100%;

    -moz-border-radius: 100%;

    border-radius: 100%;

    color: #FFFFFF;

    font-weight: 700;

    text-align: center;

    -webkti-box-sizing: border-box;

    -moz-box-sizing: border-box;

    box-sizing: border-box;

}







/*

<div id="Target" class="bubble" style="top: 27%; left: 23.2%;" >Hola chicos</div>

<div id="Cliente" class="bubble" style="top: 35%; left: 10.4%;" >Que tal?</div>

    <div id="SegP" class="bubble" style="top: 48%; left: 4.4%;" >:(</div>

*/



    .bubble {

        background-color: #00CCCC;

        background-image: -webkit-linear-gradient(top, hsla(0,0%,100%,.5), hsla(0,0%,100%,0));

        background-image:    -moz-linear-gradient(top, hsla(0,0%,100%,.5), hsla(0,0%,100%,0));

        background-image:     -ms-linear-gradient(top, hsla(0,0%,100%,.5), hsla(0,0%,100%,0));

        background-image:      -o-linear-gradient(top, hsla(0,0%,100%,.5), hsla(0,0%,100%,0));

        background-image:         linear-gradient(top, hsla(0,0%,100%,.5), hsla(0,0%,100%,0));

        border-radius: 5px;

        box-shadow: inset 0 1px 1px hsla(0,0%,100%,.5),

        3px 3px 0 hsla(0,0%,0%,.1);

        color: #006699;

        display: block;

        font: 16px/25px sans-serif;

        padding: 15px 25px;

        position: absolute;

        text-shadow: 0 1px 1px hsla(0,0%,100%,.5);

        box-sizing: border-box;

        word-wrap: break-word;

        }

      .bubble:after, .bubble:before {

        border-bottom: 25px solid transparent;

        border-right: 25px solid #00CCCC;

        bottom: -25px;

        content: '';

        position: absolute;

        right: 25px;

        }

      .bubble:before {

          border-right: 25px solid hsla(0,0%,0%,.1);

          bottom: -28px;

          right: 22px;

          }

     @media only screen and (min-width : 320px) and (max-width : 480px) {

/* Styles */

#Target{

  top: 5% ;

  left: 20%;

}

}







/* Inicio Slider Lecturas */



.mainlectura ::-webkit-scrollbar {

  width: 5px;

}

.mainlectura ::-webkit-scrollbar-track {

  border-radius: 10px;

}

.mainlectura ::-webkit-scrollbar-thumb {

  background: #5d7090;

  border-radius: 10px;

}

.mainlectura ::-webkit-scrollbar-thumb:hover {

  background: #495871;

}



/* Left Menu */

.left {

  /* width: 57px; */

  height: 100%;

  margin-left: -15px!important;

  overflow-x: hidden;

  overflow-y: auto;

  background: #0FAFBB;

  position: fixed;

  transition: all .5s;

}

.left:hover {

  width: 200px;

}

.left:hover ul li.menu-heading {

  opacity: 1;

}

.left ul {

  padding-left: 0;

}

.left ul li {

  list-style-type: none;

}

.left ul li.active a {

  background: #fff;

  color: #fff;

  border-radius: 24px;

}

.left ul li.active a:hover {

  background: #009a00;

  border-radius: 24px;

}

.left ul li a {

  display: flex;

  align-items: center;

  /*background: #354052;*/

  color: white;

  padding: 0px 0px 0px 0px;

  font-size: 13px;

  width: 31px;

  margin-bottom: 10px;

}

.left ul li a:hover {

  background: #2b3443;

  text-decoration: none;

}

.left ul li a:hover i.fa {

  color: #00b300;

}

.left ul li a:focus {

  text-decoration: none;

}

.left ul li a i.fa {

  width: 50px;

  text-align: center;

  padding-right: 15px;

  transition: all 1s;

}

.left ul .menu-heading {

  /* opacity: 0; */

  padding: 60px 5px 10px 10px;

  color: #fff;

  font-size: 16px;

  border-bottom: 1px solid #fff;

  transition: all .5s;

}



/* Right Content */

.right {

  transition: all .5s;

  margin-left: 72px;

  /* Overview */

  /* Performance */

  /* Analytics */

  /* Landing */

  /* Projects */

  /* User Profile */

  /* Candidates */

  /* Invoices */

  /* Single Invoice */

  /* Browse */

}

.right #overview .header {

  background: white;

  display: block;

  border: 1px solid #e6e6e6;

  padding: 15px 30px;

  margin-left: -15px;

}

.right #overview .header h4 {

  display: inline-block;

  color: #354052;

}

.right #overview .header ul {

  right: 0;

  left: inherit;

  max-width: 350px;

}

.right #overview .header ul li {

  display: inline-block;

  padding-left: 20px;

}

.right #overview .header ul li .btn-group i.fa-user-o, .right #overview .header ul li .btn-group i.fa-bell-o {

  color: #b3b3b3;

  font-size: 24px;

  cursor: pointer;

}

.right #overview .header ul li .btn-group i.fa-user-o:nth-child(1):after, .right #overview .header ul li .btn-group i.fa-bell-o:nth-child(1):after {

  content: '3';

  background: orange;

  color: white;

  font-size: small;

  padding: 4px 7px;

  border-radius: 50%;

  position: absolute;

  top: -8px;

  left: 10px;

}

.right #overview .header ul li .btn-group i.fa-angle-down {

  cursor: pointer;

}

.right #overview .header ul li .btn-group .dropdown-menu {

  padding: 0;

}

.right #overview .header ul li .btn-group .dropdown-menu li {

  padding-left: 0;

  display: block;

  border-bottom: 1px solid #e6e6e6;

}

.right #overview .header ul li .btn-group .dropdown-menu li:nth-child(1) .alert-card i.fa {

  color: #00b300;

}

.right #overview .header ul li .btn-group .dropdown-menu li:nth-child(2) .alert-card i.fa {

  color: #b300b3;

}

.right #overview .header ul li .btn-group .dropdown-menu li:nth-child(3) .alert-card i.fa {

  color: #354052;

}

.right #overview .header ul li .btn-group .dropdown-menu li:last-child {

  border-bottom: none;

}

.right #overview .header ul li .btn-group .dropdown-menu li a {

  padding-top: 10px;

  padding-bottom: 10px;

}

.right #overview .header ul li .btn-group .dropdown-menu li a:hover {

  background: #e5e8ee;

}

.right #overview .header ul li .btn-group .dropdown-menu li a .alert-card {

  display: flex;

}

.right #overview .header ul li .btn-group .dropdown-menu li a .alert-card img, .right #overview .header ul li .btn-group .dropdown-menu li a .alert-card i.fa {

  height: 40px;

  margin-right: 15px;

}

.right #overview .header ul li .btn-group .dropdown-menu li a .alert-card p {

  color: #354052;

  margin-bottom: 0;

}

.right #overview .header ul li .btn-group .dropdown-menu li a .alert-card p small {

  color: #7f8fa4;

  width: 100%;

  white-space: pre-line;

}

.right #overview .header ul li .dropdown-avatar img {

  height: 35px;

}

.right #overview .header ul li .dropdown-avatar i.fa {

  padding-left: 8px;

}

.right #overview .content {

  padding: 0 30px 15px 15px;

}

.right #overview .content .row.graph-cards {

  margin-top: 20px;

}

.right #overview .content .row.graph-cards .col-sm-4 div {

  background: white;

  padding: 15px;

}

.right #overview .content .row.graph-cards .col-sm-4 div h4, .right #overview .content .row.graph-cards .col-sm-4 div h2 {

  color: #354052;

}

.right #overview .content .row.graph-cards .col-sm-4 div h4 small, .right #overview .content .row.graph-cards .col-sm-4 div h2 small {

  color: #7f8fa4;

  font-size: small;

}

.right #overview .content .row.graph-cards .col-sm-4 div h2 {

  line-height: 85%;

}

.right #overview .content .row.graph-cards .col-sm-4 div img {

  width: 100%;

  height: 150px;

  object-fit: contain;

}

.right #overview .content .row.graph-cards .col-sm-4:last-child img {

  height: 220px;

}

.right #overview .content .row.project-cards {

  margin-top: 20px;

}

.right #overview .content .row.project-cards .col-sm-3 .card {

  background: white;

  padding: 0;

}

.right #overview .content .row.project-cards .col-sm-3 .card img {

  width: 100%;

}

.right #overview .content .row.project-cards .col-sm-3 .card h5 {

  padding: 15px 30px;

  border-bottom: 1px solid #e6e6e6;

}

.right #overview .content .row.project-cards .col-sm-3 .card .row {

  padding: 0 15px;

  margin-left: 0;

  margin-right: 0;

}

.right #overview .content .row.project-cards .col-sm-3 .card .row .col-sm-6 {

  padding: 15px;

}

.right #overview .content .row.invoice-task {

  margin-top: 20px;

}

.right #overview .content .row.invoice-task .col-sm-6 .invoice, .right #overview .content .row.invoice-task .col-sm-6 .tasks {

  background: white;

}

.right #overview .content .row.invoice-task .col-sm-6 .invoice h5, .right #overview .content .row.invoice-task .col-sm-6 .tasks h5 {

  color: black;

  padding: 15px;

}

.right #overview .content .row.invoice-task .col-sm-6 .invoice h5 small a, .right #overview .content .row.invoice-task .col-sm-6 .tasks h5 small a {

  color: #7f8fa4;

  font-size: xs-small;

  margin-top: 5px;

  display: block;

}

.right #overview .content .row.invoice-task .col-sm-6 .invoice .table tbody tr td, .right #overview .content .row.invoice-task .col-sm-6 .tasks .table tbody tr td {

  font-size: small;

  border-top-color: #e6e6e6;

  padding: 15px;

}

.right #overview .content .row.invoice-task .col-sm-6 .invoice .table tbody tr td:nth-child(1), .right #overview .content .row.invoice-task .col-sm-6 .invoice .table tbody tr td:nth-child(3) {

  color: #7f8fa4;

}

.right #overview .content .row.invoice-task .col-sm-6 .invoice .table tbody tr td:nth-child(4) .btn {

  font-size: xx-small;

}

.right #overview .content .row.invoice-task .col-sm-6 .invoice .table tbody tr td:nth-child(1), .right #overview .content .row.invoice-task .col-sm-6 .invoice .table tbody tr td:nth-child(2), .right #overview .content .row.invoice-task .col-sm-6 .invoice .table tbody tr td:nth-child(3), .right #overview .content .row.invoice-task .col-sm-6 .invoice .table tbody tr td:nth-child(5) {

  padding-top: 20px;

}

.right #overview .content .row.invoice-task .col-sm-6 .invoice .table tbody tr td .checkbox {

  margin: 5px 0 0;

}

.right #overview .content .row.invoice-task .col-sm-6 .tasks .table tbody tr td .checkbox {

  margin: 5px 0 0 0;

}

.right #overview .content .row.invoice-task .col-sm-6 .tasks .table tbody tr td .checkbox:hover label {

  text-decoration: line-through;

  color: #999999;

}

.right #overview .content .row.invoice-task .col-sm-6 .tasks .table tbody tr td .checkbox:hover label input {

  opacity: .5;

}

.right #overview .content .row.invoice-task .col-sm-6 .tasks .table tbody tr td .checkbox label input {

  margin-top: 2px;

}

.right #performance .header {

  background: white;

  display: block;

  border: 1px solid #e6e6e6;

  padding: 15px 30px;

  margin-left: -15px;

}

.right #performance .header h4 {

  display: inline-block;

  color: #354052;

}

.right #performance .header ul {

  right: 0;

  left: inherit;

  max-width: 350px;

}

.right #performance .header ul li {

  display: inline-block;

  padding-left: 20px;

}

.right #performance .header ul li .btn-group i.fa-user-o, .right #performance .header ul li .btn-group i.fa-bell-o {

  color: #b3b3b3;

  font-size: 24px;

  cursor: pointer;

}

.right #performance .header ul li .btn-group i.fa-user-o:nth-child(1):after, .right #performance .header ul li .btn-group i.fa-bell-o:nth-child(1):after {

  content: '3';

  background: orange;

  color: white;

  font-size: small;

  padding: 4px 7px;

  border-radius: 50%;

  position: absolute;

  top: -8px;

  left: 10px;

}

.right #performance .header ul li .btn-group i.fa-angle-down {

  cursor: pointer;

}

.right #performance .header ul li .btn-group .dropdown-menu {

  padding: 0;

}

.right #performance .header ul li .btn-group .dropdown-menu li {

  padding-left: 0;

  display: block;

  border-bottom: 1px solid #e6e6e6;

}

.right #performance .header ul li .btn-group .dropdown-menu li:nth-child(1) .alert-card i.fa {

  color: #00b300;

}

.right #performance .header ul li .btn-group .dropdown-menu li:nth-child(2) .alert-card i.fa {

  color: #b300b3;

}

.right #performance .header ul li .btn-group .dropdown-menu li:nth-child(3) .alert-card i.fa {

  color: #354052;

}

.right #performance .header ul li .btn-group .dropdown-menu li:last-child {

  border-bottom: none;

}

.right #performance .header ul li .btn-group .dropdown-menu li a {

  padding-top: 10px;

  padding-bottom: 10px;

}

.right #performance .header ul li .btn-group .dropdown-menu li a:hover {

  background: #e5e8ee;

}

.right #performance .header ul li .btn-group .dropdown-menu li a .alert-card {

  display: flex;

}

.right #performance .header ul li .btn-group .dropdown-menu li a .alert-card img, .right #performance .header ul li .btn-group .dropdown-menu li a .alert-card i.fa {

  height: 40px;

  margin-right: 15px;

}

.right #performance .header ul li .btn-group .dropdown-menu li a .alert-card p {

  color: #354052;

  margin-bottom: 0;

}

.right #performance .header ul li .btn-group .dropdown-menu li a .alert-card p small {

  color: #7f8fa4;

  width: 100%;

  white-space: pre-line;

}

.right #performance .header ul li .dropdown-avatar img {

  height: 35px;

}

.right #performance .header ul li .dropdown-avatar i.fa {

  padding-left: 8px;

}

.right #performance .content {

  margin: 0 30px 15px 15px;

}

.right #performance .content .flex {

  display: flex;

  justify-content: center;

  align-items: center;

  background: white;

  margin-left: -30px;

  margin-right: -30px;

}

.right #performance .content .flex .col-sm-2 .info-card {

  padding: 20px;

}

.right #performance .content .flex .col-sm-2 .info-card h3 {

  margin-top: 10px;

}

.right #performance .content .flex .col-sm-2 .info-card h3 small {

  font-size: small;

}

.right #performance .content .world {

  padding-top: 15px;

}

.right #performance .content .world .col-sm-6:first-child {

  padding-left: 0;

}

.right #performance .content .world .col-sm-6:last-child {

  padding-right: 0;

}

.right #performance .content .world .col-sm-6 .world-card, .right #performance .content .world .col-sm-6 .product-card {

  background: white;

}

.right #performance .content .world .col-sm-6 .world-card h4, .right #performance .content .world .col-sm-6 .product-card h4 {

  padding: 15px;

}

.right #performance .content .world .col-sm-6 .world-card img, .right #performance .content .world .col-sm-6 .product-card img {

  width: 100%;

  height: 280px;

  object-fit: contain;

}

.right #performance .content .world .col-sm-6 .product-card h4 {

  margin-bottom: 0;

}

.right #performance .content .world .col-sm-6 .product-card .custom-progress {

  padding: 9px 15px 15px;

}

.right #performance .content .world .col-sm-6 .product-card .custom-progress h6 i.fa {

  padding-right: 10px;

}

.right #performance .content .world .col-sm-6 .product-card .custom-progress h6 small {

  font-size: small;

}

.right #performance .content .world .col-sm-6 .product-card .custom-progress .progress {

  height: 15px;

  border-radius: 10px;

  margin-bottom: 0;

  background: #e7eaee;

}

.right #performance .content .world .col-sm-6 .product-card .custom-progress .progress .progress-bar {

  border-radius: 10px;

}

.right #performance .content .stats {

  margin-top: 15px;

}

.right #performance .content .stats .col-sm-4:first-child {

  padding-left: 0;

}

.right #performance .content .stats .col-sm-4:last-child {

  padding-right: 0;

}

.right #performance .content .stats .col-sm-4 .stats-card {

  background: white;

}

.right #performance .content .stats .col-sm-4 .stats-card h4 {

  padding: 15px;

}

.right #performance .content .stats .col-sm-4 .stats-card h4 small:first-child {

  font-size: xx-large;

  color: black;

}

.right #performance .content .stats .col-sm-4 .stats-card img {

  width: 100%;

  height: 150px;

  object-fit: contain;

}

.right #performance .content .stats .col-sm-4 .stats-card .row {

  padding: 0 15px;

}

.right #performance .content .stats .col-sm-4 .stats-card .row .col-sm-6 h6 {

  display: inline-block;

  font-size: 80%;

  color: #7f8fa4;

}

.right #performance .content .stats .col-sm-4 .stats-card .row .col-sm-6 h6 small {

  font-size: small;

  color: black;

  padding-left: 10px;

}

.right #performance .content .stats .col-sm-4 .stats-card .row .col-sm-10 h6 {

  font-size: x-small;

}

.right #performance .content .stats .col-sm-4 .stats-card .row .col-sm-10 .progress {

  height: 10px;

  background: #e7eaee;

  border-radius: 10px;

}

.right #performance .content .stats .col-sm-4 .stats-card .row .col-sm-10 .progress .progress-bar {

  border-radius: 10px;

}

.right #performance .content .stats .col-sm-4 .stats-card .row .col-sm-2 h4 {

  margin-top: 10px;

  font-weight: bold;

}

.right #performance .content .stats .col-sm-4 .customers .row {

  padding: 0 30px;

}

.right #performance .content .stats .col-sm-4 .customers .row .col-sm-4 h6 {

  font-size: smaller;

}

.right #performance .content .stats .col-sm-4 .customers .p-bars {

  padding-bottom: 50px;

}

.right #performance .content .stats .col-sm-4 .customers .p-bars .col-sm-4 h6 {

  font-size: large;

  font-weight: bold;

}

.right #performance .content .stats .col-sm-4 .customers .p-bars .col-sm-4 h6 small {

  font-size: small;

}

.right #performance .content .stats .col-sm-4 .customers .p-bars .col-sm-4 .progress {

  height: 10px;

  border-radius: 10px;

  background: #e6e6e6;

}

.right #performance .content .stats .col-sm-4 .customers .p-bars .col-sm-4 .progress .progress-bar {

  border-radius: 10px;

}

.right #performance .content .stats .col-sm-4 .profit {

  padding-bottom: 30px;

}

.right #performance .content .stats .col-sm-4 .profit .table tbody tr td {

  font-size: smaller;

  border-top-color: #e6e6e6;

  padding: 15px;

}

.right #performance .content .stats .col-sm-4 .profit .table tbody tr td i.fa {

  padding-right: 10px;

}

.right #performance .content .stats .col-sm-4 .profit .table tbody tr:first-child td {

  border-top: none;

}

.right #analytics .header {

  background: #0FAFBB;

  display: block;

  border: 1px solid #0FAFBB;

  padding: 15px 30px;

  margin-left: -15px;

}

.right #analytics .header h4 {

  display: inline-block;

  color: #354052;

}

.right #analytics .header ul {

  right: 0;

  left: inherit;

  max-width: 350px;

}

.right #analytics .header ul li {

  display: inline-block;

  padding-left: 20px;

}

.right #analytics .header ul li .btn-group i.fa-user-o, .right #analytics .header ul li .btn-group i.fa-bell-o {

  color: #b3b3b3;

  font-size: 24px;

  cursor: pointer;

}

.right #analytics .header ul li .btn-group i.fa-user-o:nth-child(1):after, .right #analytics .header ul li .btn-group i.fa-bell-o:nth-child(1):after {

  content: '3';

  background: orange;

  color: white;

  font-size: small;

  padding: 4px 7px;

  border-radius: 50%;

  position: absolute;

  top: -8px;

  left: 10px;

}

.right #analytics .header ul li .btn-group i.fa-angle-down {

  cursor: pointer;

}

.right #analytics .header ul li .btn-group .dropdown-menu {

  padding: 0;

}

.right #analytics .header ul li .btn-group .dropdown-menu li {

  padding-left: 0;

  display: block;

  border-bottom: 1px solid #e6e6e6;

}

.right #analytics .header ul li .btn-group .dropdown-menu li:nth-child(1) .alert-card i.fa {

  color: #00b300;

}

.right #analytics .header ul li .btn-group .dropdown-menu li:nth-child(2) .alert-card i.fa {

  color: #b300b3;

}

.right #analytics .header ul li .btn-group .dropdown-menu li:nth-child(3) .alert-card i.fa {

  color: #354052;

}

.right #analytics .header ul li .btn-group .dropdown-menu li:last-child {

  border-bottom: none;

}

.right #analytics .header ul li .btn-group .dropdown-menu li a {

  padding-top: 10px;

  padding-bottom: 10px;

}

.right #analytics .header ul li .btn-group .dropdown-menu li a:hover {

  background: #e5e8ee;

}

.right #analytics .header ul li .btn-group .dropdown-menu li a .alert-card {

  display: flex;

}

.right #analytics .header ul li .btn-group .dropdown-menu li a .alert-card img, .right #analytics .header ul li .btn-group .dropdown-menu li a .alert-card i.fa {

  height: 40px;

  margin-right: 15px;

}

.right #analytics .header ul li .btn-group .dropdown-menu li a .alert-card p {

  color: #354052;

  margin-bottom: 0;

}

.right #analytics .header ul li .btn-group .dropdown-menu li a .alert-card p small {

  color: #7f8fa4;

  width: 100%;

  white-space: pre-line;

}

.right #analytics .header ul li .dropdown-avatar img {

  height: 35px;

}

.right #analytics .header ul li .dropdown-avatar i.fa {

  padding-left: 8px;

}

.right #analytics .content {

  margin: 0 30px 15px 0px;

}



.active-clients h4{

color:#F3845B;

text-align: center;

font-weight: bold;

}

.right #analytics .content .revenue, .right #analytics .content .active-clients {

  background: white;

  margin-top: 0px;

}

.right #analytics .content .revenue h4, .right #analytics .content .active-clients h4 {

  margin-bottom: 20px;

}

.right #analytics .content .revenue img, .right #analytics .content .active-clients img {

  width: 100%;

  object-fit: contain;

  /*border-radius: 24px;*/

}



.right #analytics .content .active-clients, .right #analytics .content .tasks {

  background: white;

}

.right #analytics .content .active-clients h6, .right #analytics .content .tasks h6 {

  font-weight: bold;

  line-height: 150%;

}

.right #analytics .content .active-clients h6 small, .right #analytics .content .tasks h6 small {

  font-size: small;

}

.right #analytics .content .active-clients .table, .right #analytics .content .tasks .table {

  margin-bottom: 0;

}

.right #analytics .content .active-clients .table tbody tr td, .right #analytics .content .tasks .table tbody tr td {

  border-top: 0;

  font-size: small;

}

.right #analytics .content .active-clients .table tbody tr td .progress, .right #analytics .content .tasks .table tbody tr td .progress {

  height: 15px;

  border-radius: 10px;

  background: #e6e6e6;

  margin-top: 10px;

  margin-bottom: 10px;

}

.right #analytics .content .active-clients .table tbody tr td .progress .progress-bar, .right #analytics .content .tasks .table tbody tr td .progress .progress-bar {

  border-radius: 10px;

}

.right #analytics .content .tasks {

  margin-top: 15px;

  padding: 15px;

}

.right #analytics .content .total-stats {

  margin-top: 20px;

}

.right #analytics .content .total-stats .col-sm-3:nth-child(3) .stats-card h3 small i.fa {

  padding: 2px 4px 0;

}

.right #analytics .content .total-stats .col-sm-3 .stats-card {

  background: white;

  padding: 15px;

}

.right #analytics .content .total-stats .col-sm-3 .stats-card span {

  display: inline-block;

  border-radius: 50%;

  vertical-align: bottom;

}

.right #analytics .content .total-stats .col-sm-3 .stats-card span i.fa {

  border: 1px solid white;

  padding: 20px 17px;

  border-radius: 50%;

  color: white;

}

.right #analytics .content .total-stats .col-sm-3 .stats-card .orange-chart {

  background: #ffa705;

  border: 5px solid #ffa705;

}

.right #analytics .content .total-stats .col-sm-3 .stats-card .purple-chart {

  background: #b300b3;

  border: 5px solid #b300b3;

}

.right #analytics .content .total-stats .col-sm-3 .stats-card .red-chart {

  background: #ff3333;

  border: 5px solid #ff3333;

}

.right #analytics .content .total-stats .col-sm-3 .stats-card .green-chart {

  background: #00b300;

  border: 5px solid #00b300;

}

.right #analytics .content .total-stats .col-sm-3 .stats-card h3 {

  display: inline-block;

  font-weight: bold;

  padding-left: 20px;

}

.right #analytics .content .total-stats .col-sm-3 .stats-card h3 small {

  font-size: small;

}

.right #analytics .content .total-stats .col-sm-3 .stats-card h3 small i.fa {

  background: #b6c0d0;

  color: white;

  vertical-align: super;

  border-radius: 50%;

  padding: 0 4px 2px;

}

.right #analytics .content .income-customers {

  margin-top: 20px;

  background: white;

}



.table-responsive {

    min-height: .01%;

    overflow-x: auto;

    margin-top: 25px!important;

}



.right #analytics .content .income-customers .table-responsive h4 {

  padding: 15px;

}

.right #analytics .content .income-customers .table-responsive h4 small {

  font-size: small;

}

.right #analytics .content .income-customers .table-responsive table {

  margin-bottom: 0;

}

.right #analytics .content .income-customers .table-responsive table tbody tr td {

  vertical-align: middle;

  font-size: smaller;

  padding: 15px;

}

.right #analytics .content .income-customers .table-responsive table tbody tr td img {

  width: 30px;

}



.right #landing .header {

  background: white;

  display: block;

  border: 1px solid #e6e6e6;

  padding: 15px 30px;

  margin-left: -15px;

}

.right #landing .header h4 {

  display: inline-block;

  color: #354052;

}

.right #landing .header ul {

  right: 0;

  left: inherit;

  max-width: 350px;

}

.right #landing .header ul li {

  display: inline-block;

  padding-left: 20px;

}

.right #landing .header ul li .btn-group i.fa-user-o, .right #landing .header ul li .btn-group i.fa-bell-o {

  color: #b3b3b3;

  font-size: 24px;

  cursor: pointer;

}

.right #landing .header ul li .btn-group i.fa-user-o:nth-child(1):after, .right #landing .header ul li .btn-group i.fa-bell-o:nth-child(1):after {

  content: '3';

  background: orange;

  color: white;

  font-size: small;

  padding: 4px 7px;

  border-radius: 50%;

  position: absolute;

  top: -8px;

  left: 10px;

}



.right #landing .header ul li .btn-group i.fa-angle-down {

  cursor: pointer;

}

.right #landing .header ul li .btn-group .dropdown-menu {

  padding: 0;

}

.right #landing .header ul li .btn-group .dropdown-menu li {

  padding-left: 0;

  display: block;

  border-bottom: 1px solid #e6e6e6;

}

.right #landing .header ul li .btn-group .dropdown-menu li:nth-child(1) .alert-card i.fa {

  color: #00b300;

}

.right #landing .header ul li .btn-group .dropdown-menu li:nth-child(2) .alert-card i.fa {

  color: #b300b3;

}

.right #landing .header ul li .btn-group .dropdown-menu li:nth-child(3) .alert-card i.fa {

  color: #354052;

}

.right #landing .header ul li .btn-group .dropdown-menu li:last-child {

  border-bottom: none;

}

.right #landing .header ul li .btn-group .dropdown-menu li a {

  padding-top: 10px;

  padding-bottom: 10px;

}

.right #landing .header ul li .btn-group .dropdown-menu li a:hover {

  background: #e5e8ee;

}

.right #landing .header ul li .btn-group .dropdown-menu li a .alert-card {

  display: flex;

}

.right #landing .header ul li .btn-group .dropdown-menu li a .alert-card img, .right #landing .header ul li .btn-group .dropdown-menu li a .alert-card i.fa {

  height: 40px;

  margin-right: 15px;

}

.right #landing .header ul li .btn-group .dropdown-menu li a .alert-card p {

  color: #354052;

  margin-bottom: 0;

}

.right #landing .header ul li .btn-group .dropdown-menu li a .alert-card p small {

  color: #7f8fa4;

  width: 100%;

  white-space: pre-line;

}

.right #landing .header ul li .dropdown-avatar img {

  height: 35px;

}

.right #landing .header ul li .dropdown-avatar i.fa {

  padding-left: 8px;

}

.right #landing .content {

  margin: 0 30px 15px 15px;

}

.right #landing .content h3.text-center {

  padding: 2em;

}

.right #landing .content .card-4 {

  background: white;

  padding: 50px;

}

.right #landing .content .card-4 p {

  padding: 2em;

  margin-bottom: 0;

  font-weight: bold;

}

.right #landing .content .col-sm-6:nth-child(2) .card-6 {

  padding: 0;

}

.right #landing .content .card-6 {

  background: white;

  padding: 15px;

}

.right #landing .content .card-6 .row .col-sm-4 h4 {

  font-weight: bold;

}

.right #landing .content .card-6 .row .col-sm-4 h4 small {

  font-size: small;

  margin: 10px 0;

}

.right #landing .content .card-6 .row .col-sm-4 img {

  width: 100%;

  height: 150px;

  object-fit: cover;

}

.right #landing .content .card-6 .row .col-sm-3 h5 {

  font-weight: bold;

}

.right #landing .content .card-6 .row .col-sm-3 h5 small {

  font-size: small;

  margin: 10px 0;

}

.right #landing .content .card-6 .row .col-sm-3 .progress {

  height: 5px;

}

.right #landing .content .card-6 .table-responsive {

  overflow-x: unset;

}

.right #landing .content .card-6 .table-responsive .table {

  margin-bottom: 0;

}

.right #landing .content .card-6 .table-responsive .table tr:first-child td {

  border-top: 0;

}

.right #landing .content .card-6 .table-responsive .table tr td {

  vertical-align: middle;

  padding: 15px;

}

.right #landing .content .card-6 .table-responsive .table tr td img {

  height: 45px;

}



.right #projects .header {

  background: white;

  display: block;

  border: 1px solid #e6e6e6;

  padding: 15px 30px;

  margin-left: -15px;

}

.right #projects .header h4 {

  display: inline-block;

  color: #354052;

}

.right #projects .header ul {

  right: 0;

  left: inherit;

  max-width: 350px;

}

.right #projects .header ul li {

  display: inline-block;

  padding-left: 20px;

}

.right #projects .header ul li .btn-group i.fa-user-o, .right #projects .header ul li .btn-group i.fa-bell-o {

  color: #b3b3b3;

  font-size: 24px;

  cursor: pointer;

}

.right #projects .header ul li .btn-group i.fa-user-o:nth-child(1):after, .right #projects .header ul li .btn-group i.fa-bell-o:nth-child(1):after {

  content: '3';

  background: orange;

  color: white;

  font-size: small;

  padding: 4px 7px;

  border-radius: 50%;

  position: absolute;

  top: -8px;

  left: 10px;

}

.right #projects .header ul li .btn-group i.fa-angle-down {

  cursor: pointer;

}

.right #projects .header ul li .btn-group .dropdown-menu {

  padding: 0;

}

.right #projects .header ul li .btn-group .dropdown-menu li {

  padding-left: 0;

  display: block;

  border-bottom: 1px solid #e6e6e6;

}

.right #projects .header ul li .btn-group .dropdown-menu li:nth-child(1) .alert-card i.fa {

  color: #00b300;

}

.right #projects .header ul li .btn-group .dropdown-menu li:nth-child(2) .alert-card i.fa {

  color: #b300b3;

}

.right #projects .header ul li .btn-group .dropdown-menu li:nth-child(3) .alert-card i.fa {

  color: #354052;

}

.right #projects .header ul li .btn-group .dropdown-menu li:last-child {

  border-bottom: none;

}

.right #projects .header ul li .btn-group .dropdown-menu li a {

  padding-top: 10px;

  padding-bottom: 10px;

}

.right #projects .header ul li .btn-group .dropdown-menu li a:hover {

  background: #e5e8ee;

}

.right #projects .header ul li .btn-group .dropdown-menu li a .alert-card {

  display: flex;

}

.right #projects .header ul li .btn-group .dropdown-menu li a .alert-card img, .right #projects .header ul li .btn-group .dropdown-menu li a .alert-card i.fa {

  height: 40px;

  margin-right: 15px;

}

.right #projects .header ul li .btn-group .dropdown-menu li a .alert-card p {

  color: #354052;

  margin-bottom: 0;

}

.right #projects .header ul li .btn-group .dropdown-menu li a .alert-card p small {

  color: #7f8fa4;

  width: 100%;

  white-space: pre-line;

}

.right #projects .header ul li .dropdown-avatar img {

  height: 35px;

}

.right #projects .header ul li .dropdown-avatar i.fa {

  padding-left: 8px;

}

.right #projects .content {

  margin: 20px 30px 15px 15px;

}

.right #projects .content .row {

  padding-left: 15px;

  padding-right: 15px;

}

.right #projects .content .row .col-sm-3:first-child {

  padding-left: 0;

}

.right #projects .content .row .col-sm-3:first-child .card-3 {

  background: #4d5d77;

}

.right #projects .content .row .col-sm-3:nth-child(2) .card-3 {

  background: #00bd00;

}

.right #projects .content .row .col-sm-3:nth-child(3) .card-3 {

  background: #e69500;

}

.right #projects .content .row .col-sm-3:last-child {

  padding-right: 0;

}

.right #projects .content .row .col-sm-3:last-child .card-3 {

  background: #ff3333;

}

.right #projects .content .row .col-sm-3 .card-3 {

  background: white;

  padding: 15px;

  color: white;

  border-radius: 5px;

}

.right #projects .content .row .col-sm-3 .card-3 h3 {

  margin-top: 0;

  margin-bottom: 25px;

  font-weight: bold;

}

.right #projects .content .row .col-sm-3 .card-3 h3 small {

  font-size: small;

  line-height: 3em;

  color: rgba(255, 255, 255, 0.8);

}

.right #projects .content .row .col-sm-3 .card-3 h3 span i.fa {

  color: rgba(255, 255, 255, 0.3);

}

.right #projects .content .row {

  margin-top: 20px;

}

.right #projects .content .row .responsive-table {

  background: white;

  border: 1px solid #e6e6e6;

}

.right #projects .content .row .responsive-table h3 {

  color: #354052;

  padding: 30px 15px;

  border-bottom: 1px solid #e6e6e6;

  margin: 0;

}

.right #projects .content .row .responsive-table h3 small {

  font-size: small;

  color: #7f8fa4;

}

.right #projects .content .row .responsive-table h3 i.fa {

  color: #7f8fa4;

  cursor: pointer;

}

.right #projects .content .row .responsive-table h3 i.fa:hover {

  color: #00b300;

}

.right #projects .content .row .responsive-table table {

  font-size: small;

  color: #354052;

  margin-bottom: 0;

}

.right #projects .content .row .responsive-table table thead tr th {

  color: #7f8fa4;

  font-weight: normal;

  border-bottom-color: #e6e6e6;

  padding: 15px;

}

.right #projects .content .row .responsive-table table tbody tr td {

  border-top-color: #e6e6e6;

  padding: 15px;

}

.right #projects .content .row .responsive-table table tbody tr td small {

  color: #7f8fa4;

  font-size: xx-small;

}

.right #projects .content .row .responsive-table table tbody tr td i.fa {

  padding-right: 10px;

}

.right #projects .content .row .responsive-table table tbody tr td .btn-group .btn {

  color: #354052;

  font-size: small;

}

.right #projects .content .row .responsive-table table tbody tr td .btn-group .dropdown-toggle i.fa {

  padding-right: 0;

}

.right #projects .content .row .responsive-table table tbody tr td .btn-group .dropdown-menu {

  padding: 0;

  right: 0;

  left: inherit;

  box-shadow: none;

  border-color: #d9d9d9;

}

.right #projects .content .row .responsive-table table tbody tr td .btn-group .dropdown-menu li a {

  color: #354052;

  font-size: small;

  border-bottom: 1px solid #e6e6e6;

  padding: 10px 20px;

}

.right #projects .content .row .responsive-table table tbody tr .img-team {

  display: flex;

  align-items: center;

}

.right #projects .content .row .responsive-table table tbody tr .img-team img {

  height: 40px;

}

.right #projects .content .row .responsive-table table tbody tr .img-team p {

  padding-left: 10px;

  margin-bottom: 0;

}

.right #projects .content .row .responsive-table table tbody tr.danger {

  border-left: 2px solid red;

}

.right #projects .content .row .responsive-table table tbody tr.danger td {

  background: white;

}

.right #user-profile .header {

  background: white;

  display: block;

  border: 1px solid #e6e6e6;

  padding: 15px 30px;

  margin-left: -15px;

}

.right #user-profile .header h4 {

  display: inline-block;

  color: #354052;

}

.right #user-profile .header ul {

  right: 0;

  left: inherit;

  max-width: 350px;

}

.right #user-profile .header ul li {

  display: inline-block;

  padding-left: 20px;

}

.right #user-profile .header ul li .btn-group i.fa-user-o, .right #user-profile .header ul li .btn-group i.fa-bell-o {

  color: #b3b3b3;

  font-size: 24px;

  cursor: pointer;

}

.right #user-profile .header ul li .btn-group i.fa-user-o:nth-child(1):after, .right #user-profile .header ul li .btn-group i.fa-bell-o:nth-child(1):after {

  content: '3';

  background: orange;

  color: white;

  font-size: small;

  padding: 4px 7px;

  border-radius: 50%;

  position: absolute;

  top: -8px;

  left: 10px;

}

.right #user-profile .header ul li .btn-group i.fa-angle-down {

  cursor: pointer;

}

.right #user-profile .header ul li .btn-group .dropdown-menu {

  padding: 0;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li {

  padding-left: 0;

  display: block;

  border-bottom: 1px solid #e6e6e6;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li:nth-child(1) .alert-card i.fa {

  color: #00b300;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li:nth-child(2) .alert-card i.fa {

  color: #b300b3;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li:nth-child(3) .alert-card i.fa {

  color: #354052;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li:last-child {

  border-bottom: none;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li a {

  padding-top: 10px;

  padding-bottom: 10px;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li a:hover {

  background: #e5e8ee;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li a .alert-card {

  display: flex;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li a .alert-card img, .right #user-profile .header ul li .btn-group .dropdown-menu li a .alert-card i.fa {

  height: 40px;

  margin-right: 15px;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li a .alert-card p {

  color: #354052;

  margin-bottom: 0;

}

.right #user-profile .header ul li .btn-group .dropdown-menu li a .alert-card p small {

  color: #7f8fa4;

  width: 100%;

  white-space: pre-line;

}

.right #user-profile .header ul li .dropdown-avatar img {

  height: 35px;

}

.right #user-profile .header ul li .dropdown-avatar i.fa {

  padding-left: 8px;

}

.right #user-profile .content {

  margin: 0 30px 15px 15px;

}

.right #user-profile .content .row {

  padding-top: 20px;

}

.right #user-profile .content .row .card-7, .right #user-profile .content .row .card-5 {

  background: white;

}

.right #user-profile .content .row .card-7 .nav-tabs {

  border-bottom: 0;

  border: 1px solid #ddd;

}

.right #user-profile .content .row .card-7 .nav-tabs li {

  border-bottom: 2px solid transparent;

  margin-bottom: -2px;

}

.right #user-profile .content .row .card-7 .nav-tabs li a {

  color: #495871;

  padding-top: 20px;

  padding-bottom: 20px;

}

.right #user-profile .content .row .card-7 .nav-tabs li:hover a {

  color: black;

  border-bottom: 0;

  background: transparent;

}

.right #user-profile .content .row .card-7 .nav-tabs li.active {

  font-weight: bold;

  border-bottom: 2px solid #00b300;

}

.right #user-profile .content .row .card-7 .nav-tabs li.active a {

  border: 0;

  color: black;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane {

  padding: 20px 15px;

  border: 1px solid #ddd;

  border-top: 0;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul {

  padding-left: 25px;

  padding-right: 50px;

  margin-bottom: 40px;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul small.title {

  margin-left: -25px;

  color: #999999;

  font-weight: bold;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul li {

  list-style-type: none;

  position: relative;

  color: black;

  margin-bottom: 20px;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul li:before {

  content: '';

  position: absolute;

  top: 8px;

  left: -25px;

  width: 12px;

  height: 12px;

  border-radius: 50%;

  background: #7f8fa4;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul li:nth-child(2):before {

  background: orange;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul li:nth-child(3):before {

  background: green;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul li:nth-child(4):before {

  background: red;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul li h6 {

  line-height: 30px;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul li h6 span {

  display: block;

  padding: 5px 15px;

  border: 1px solid #ddd;

  border-radius: 5px;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul li h6 span.imgs {

  border: none;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul li h6 span.imgs img {

  height: 60px;

  display: inline-block;

  margin-right: 5px;

}

.right #user-profile .content .row .card-7 .tab-content .tab-pane ul li h6 small {

  font-size: inherit;

}

.right #user-profile .content .row .card-5 {

  padding: 15px;

  margin-bottom: 20px;

}

.right #user-profile .content .row .card-5 .profile {

  width: 100%;

  text-align: center;

  display: flex;

  justify-content: center;

  align-items: center;

  flex-direction: column;

}

.right #user-profile .content .row .card-5 .profile img {

  height: 100px;

}

.right #user-profile .content .row .card-5 .profile h4 {

  font-weight: bold;

  line-height: 40px;

}

.right #user-profile .content .row .card-5 .profile h4 small {

  font-size: small;

  display: block;

  line-height: 20px;

}

.right #user-profile .content .row .card-5 .profile h4 small:nth-child(1) {

  color: black;

}

.right #user-profile .content .row .card-5 .profile h4 small:nth-child(2) {

  color: #7f8fa4;

}

.right #user-profile .content .row .card-5 .dtls .col-sm-3 h5 {

  font-weight: bold;

  color: black;

}

.right #user-profile .content .row .card-5 .dtls .col-sm-3 h5 small {

  color: #999999;

  line-height: 30px;

}



.right #user-profile .content .row .card-5 .fb, .right #user-profile .content .row .card-5 .drop, .right #user-profile .content .row .card-5 .link {

  margin: 30px 0;

}

.right #user-profile .content .row .card-5 .fb span, .right #user-profile .content .row .card-5 .drop span, .right #user-profile .content .row .card-5 .link span {

  width: 35px;

  height: 35px;

  border-radius: 50%;

  text-align: center;

  padding-top: 9px;

  margin-right: 20px;

}

.right #user-profile .content .row .card-5 .fb span i.fa, .right #user-profile .content .row .card-5 .drop span i.fa, .right #user-profile .content .row .card-5 .link span i.fa {

  color: white;

}

.right #user-profile .content .row .card-5 .fb h5, .right #user-profile .content .row .card-5 .drop h5, .right #user-profile .content .row .card-5 .link h5 {

  color: black;

  font-weight: bold;

}

.right #user-profile .content .row .card-5 .fb span {

  background: green;

  padding-top: 7px;

}

.right #user-profile .content .row .card-5 .drop span {

  background: purple;

}

.right #user-profile .content .row .card-5 .link a {

  font-size: small;

  color: #9da9b9;

}

.right #user-profile .content .row .billing .billing-row {

  font-size: small;

  margin-bottom: 20px;

}

.right #user-profile .content .row .billing .billing-row .col-sm-6 i.fa {

  padding-right: 10px;

  color: purple;

}

.right #user-profile .content .row .billing .billing-row .col-sm-3.text-gray {

  color: #999999;

}

.right #user-profile .content .row .table tbody tr td {

  padding: 10px 5px;

  border-top: 0;

  font-size: small;

  color: #8c8c8c;

}

.right #user-profile .content .row .table tbody tr td:first-child {

  color: black;

  width: 40%;

}

.right #user-profile .content .row .table tbody tr td:last-child {

  text-align: right;

}

.right #candidates .header {

  background: white;

  display: block;

  border: 1px solid #e6e6e6;

  padding: 15px 30px;

  margin-left: -15px;

}

.right #candidates .header h4 {

  display: inline-block;

  color: #354052;

}

.right #candidates .header ul {

  right: 0;

  left: inherit;

  max-width: 350px;

}

.right #candidates .header ul li {

  display: inline-block;

  padding-left: 20px;

}

.right #candidates .header ul li .btn-group i.fa-user-o, .right #candidates .header ul li .btn-group i.fa-bell-o {

  color: #b3b3b3;

  font-size: 24px;

  cursor: pointer;

}

.right #candidates .header ul li .btn-group i.fa-user-o:nth-child(1):after, .right #candidates .header ul li .btn-group i.fa-bell-o:nth-child(1):after {

  content: '3';

  background: orange;

  color: white;

  font-size: small;

  padding: 4px 7px;

  border-radius: 50%;

  position: absolute;

  top: -8px;

  left: 10px;

}

.right #candidates .header ul li .btn-group i.fa-angle-down {

  cursor: pointer;

}

.right #candidates .header ul li .btn-group .dropdown-menu {

  padding: 0;

}

.right #candidates .header ul li .btn-group .dropdown-menu li {

  padding-left: 0;

  display: block;

  border-bottom: 1px solid #e6e6e6;

}

.right #candidates .header ul li .btn-group .dropdown-menu li:nth-child(1) .alert-card i.fa {

  color: #00b300;

}

.right #candidates .header ul li .btn-group .dropdown-menu li:nth-child(2) .alert-card i.fa {

  color: #b300b3;

}

.right #candidates .header ul li .btn-group .dropdown-menu li:nth-child(3) .alert-card i.fa {

  color: #354052;

}

.right #candidates .header ul li .btn-group .dropdown-menu li:last-child {

  border-bottom: none;

}

.right #candidates .header ul li .btn-group .dropdown-menu li a {

  padding-top: 10px;

  padding-bottom: 10px;

}

.right #candidates .header ul li .btn-group .dropdown-menu li a:hover {

  background: #e5e8ee;

}

.right #candidates .header ul li .btn-group .dropdown-menu li a .alert-card {

  display: flex;

}

.right #candidates .header ul li .btn-group .dropdown-menu li a .alert-card img, .right #candidates .header ul li .btn-group .dropdown-menu li a .alert-card i.fa {

  height: 40px;

  margin-right: 15px;

}

.right #candidates .header ul li .btn-group .dropdown-menu li a .alert-card p {

  color: #354052;

  margin-bottom: 0;

}

.right #candidates .header ul li .btn-group .dropdown-menu li a .alert-card p small {

  color: #7f8fa4;

  width: 100%;

  white-space: pre-line;

}

.right #candidates .header ul li .dropdown-avatar img {

  height: 35px;

}

.right #candidates .header ul li .dropdown-avatar i.fa {

  padding-left: 8px;

}

.right #candidates .content {

  margin: 0 30px 15px 15px;

}

.right #candidates .content .row {

  margin-top: 20px;

}

.right #candidates .content .row .candid-card .card-4 {

  background: white;

  padding: 15px;

}

.right #candidates .content .row .candid-card .card-4 .main-img {

  width: 100%;

}

.right #candidates .content .row .candid-card .card-4 .row {

  margin-top: 10px;

}

.right #candidates .content .row .candid-card .card-4 .row .col-sm-10 img {

  margin-top: -40px;

  margin-right: 15px;

}

.right #candidates .content .row .candid-card .card-4 .row .col-sm-10 h5 {

  font-weight: bold;

}

.right #candidates .content .row .candid-card .card-4 .row .col-sm-10 h5 small {

  font-size: small;

  line-height: 30px;

}

.right #candidates .content .row .candid-card .card-4 .row .col-sm-2 {

  margin-top: 10px;

}

.right #candidates .content .row .candid-card .card-4 .row .col-sm-2 a {

  color: #bfbfbf;

}



.right #invoices .header {

  background: white;

  display: block;

  border: 1px solid #e6e6e6;

  padding: 15px 30px;

  margin-left: -15px;

}

.right #invoices .header h4 {

  display: inline-block;

  color: #354052;

}

.right #invoices .header ul {

  right: 0;

  left: inherit;

  max-width: 350px;

}

.right #invoices .header ul li {

  display: inline-block;

  padding-left: 20px;

}



.right #invoices .header ul li .btn-group i.fa-user-o, .right #invoices .header ul li .btn-group i.fa-bell-o {

  color: #b3b3b3;

  font-size: 24px;

  cursor: pointer;

}

.right #invoices .header ul li .btn-group i.fa-user-o:nth-child(1):after, .right #invoices .header ul li .btn-group i.fa-bell-o:nth-child(1):after {

  content: '3';

  background: orange;

  color: white;

  font-size: small;

  padding: 4px 7px;

  border-radius: 50%;

  position: absolute;

  top: -8px;

  left: 10px;

}

.right #invoices .header ul li .btn-group i.fa-angle-down {

  cursor: pointer;

}

.right #invoices .header ul li .btn-group .dropdown-menu {

  padding: 0;

}

.right #invoices .header ul li .btn-group .dropdown-menu li {

  padding-left: 0;

  display: block;

  border-bottom: 1px solid #e6e6e6;

}



.right #invoices .header ul li .btn-group .dropdown-menu li:nth-child(1) .alert-card i.fa {

  color: #00b300;

}

.right #invoices .header ul li .btn-group .dropdown-menu li:nth-child(2) .alert-card i.fa {

  color: #b300b3;

}

.right #invoices .header ul li .btn-group .dropdown-menu li:nth-child(3) .alert-card i.fa {

  color: #354052;

}

.right #invoices .header ul li .btn-group .dropdown-menu li:last-child {

  border-bottom: none;

}

.right #invoices .header ul li .btn-group .dropdown-menu li a {

  padding-top: 10px;

  padding-bottom: 10px;

}

.right #invoices .header ul li .btn-group .dropdown-menu li a:hover {

  background: #e5e8ee;

}

.right #invoices .header ul li .btn-group .dropdown-menu li a .alert-card {

  display: flex;

}

.right #invoices .header ul li .btn-group .dropdown-menu li a .alert-card img, .right #invoices .header ul li .btn-group .dropdown-menu li a .alert-card i.fa {

  height: 40px;

  margin-right: 15px;

}

.right #invoices .header ul li .btn-group .dropdown-menu li a .alert-card p {

  color: #354052;

  margin-bottom: 0;

}

.right #invoices .header ul li .btn-group .dropdown-menu li a .alert-card p small {

  color: #7f8fa4;

  width: 100%;

  white-space: pre-line;

}



.right #invoices .header ul li .dropdown-avatar img {

  height: 35px;

}

.right #invoices .header ul li .dropdown-avatar i.fa {

  padding-left: 8px;

}

.right #invoices .content {

  margin: 0 30px 15px 15px;

}

.right #invoices .content .row.invoice {

  margin-top: 20px;

}

.right #invoices .content .row.invoice .summary-card {

  background: white;

  padding: 15px;

}

.right #invoices .content .row.invoice .summary-card h5 {

  display: inline-block;

  font-weight: bold;

}

.right #invoices .content .row.invoice .summary-card h5 small {

  color: #7f8fa4;

}

.right #invoices .content .row.invoice .summary-card .dropdown i.fa {

  margin-top: 15px;

  color: #7f8fa4;

  cursor: pointer;

}

.right #invoices .content .row.invoice .summary-card .row .col-sm-4:nth-child(2) .bg-cir {

  background: red;

  padding: 2px 3px 1px 4px;

}

.right #invoices .content .row.invoice .summary-card .row .col-sm-4 h3 {

  position: relative;

}

.right #invoices .content .row.invoice .summary-card .row .col-sm-4 h3 small {

  font-size: x-small;

  font-weight: bold;

}

.right #invoices .content .row.invoice .summary-card .row .col-sm-4 h3 .bg-cir {

  position: absolute;

  bottom: 35px;

  font-size: x-small;

  background: green;

  color: white;

  padding: 0 3px 3px 4px;

  border-radius: 10px;

}



.right #invoices .content .row.invoice .summary-card .cust-img {

  height: 135px;

  width: 100%;

  object-fit: contain;

}

.right #invoices .content .table-invoice .table-in-card {

  background: white;

}

.right #invoices .content .table-invoice .table-in-card h3 {

  color: black;

  font-weight: bold;

  padding: 15px;

}

.right #invoices .content .table-invoice .table-in-card .table thead tr th, .right #invoices .content .table-invoice .table-in-card .table tbody tr td {

  vertical-align: middle;

  font-size: smaller;

}

.right #invoices .content .table-invoice .table-in-card .table thead tr th {

  color: #999999;

  border-bottom: 0;

}

.right #invoices .content .table-invoice .table-in-card .table tbody tr td {

  padding: 20px 10px;

}

.right #invoices .content .table-invoice .table-in-card .table tbody tr td:last-child a {

  color: #999999;

}

.right #single-invoice .header {

  background: white;

  display: block;

  border: 1px solid #e6e6e6;

  padding: 15px 30px;

  margin-left: -15px;

}

.right #single-invoice .header h4 {

  display: inline-block;

  color: #354052;

}

.right #single-invoice .header ul {

  right: 0;

  left: inherit;

  max-width: 350px;

}

.right #single-invoice .header ul li {

  display: inline-block;

  padding-left: 20px;

}



.right #single-invoice .header ul li .btn-group i.fa-user-o, .right #single-invoice .header ul li .btn-group i.fa-bell-o {

  color: #b3b3b3;

  font-size: 24px;

  cursor: pointer;

}

.right #single-invoice .header ul li .btn-group i.fa-user-o:nth-child(1):after, .right #single-invoice .header ul li .btn-group i.fa-bell-o:nth-child(1):after {

  content: '3';

  background: orange;

  color: white;

  font-size: small;

  padding: 4px 7px;

  border-radius: 50%;

  position: absolute;

  top: -8px;

  left: 10px;

}

.right #single-invoice .header ul li .btn-group i.fa-angle-down {

  cursor: pointer;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu {

  padding: 0;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li {

  padding-left: 0;

  display: block;

  border-bottom: 1px solid #e6e6e6;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li:nth-child(1) .alert-card i.fa {

  color: #00b300;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li:nth-child(2) .alert-card i.fa {

  color: #b300b3;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li:nth-child(3) .alert-card i.fa {

  color: #354052;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li:last-child {

  border-bottom: none;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li a {

  padding-top: 10px;

  padding-bottom: 10px;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li a:hover {

  background: #e5e8ee;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li a .alert-card {

  display: flex;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li a .alert-card img, .right #single-invoice .header ul li .btn-group .dropdown-menu li a .alert-card i.fa {

  height: 40px;

  margin-right: 15px;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li a .alert-card p {

  color: #354052;

  margin-bottom: 0;

}

.right #single-invoice .header ul li .btn-group .dropdown-menu li a .alert-card p small {

  color: #7f8fa4;

  width: 100%;

  white-space: pre-line;

}

.right #single-invoice .header ul li .dropdown-avatar img {

  height: 35px;

}

.right #single-invoice .header ul li .dropdown-avatar i.fa {

  padding-left: 8px;

}

.right #single-invoice .content {

  margin: 0 30px 15px 15px;

}

.right #single-invoice .content .s-inv-card {

  background: white;

  margin-top: 20px;

  padding: 10rem 10rem 3rem;

  box-shadow: 0 0 10px #cad0d9;

}

.right #single-invoice .content .s-inv-card .row {

  margin-bottom: 8rem;

}

.right #single-invoice .content .s-inv-card .row:last-child {

  margin-bottom: 2rem;

}

.right #single-invoice .content .s-inv-card .row small {

  line-height: 25px;

}

.right #single-invoice .content .s-inv-card .row .s-inv-header .col-sm-3 h4 {

  margin-top: 4rem;

}

.right #single-invoice .content .s-inv-card .row .s-inv-body .col-sm-3 h4 small {

  line-height: 50px;

}

.right #single-invoice .content .s-inv-card .row .s-inv-body .col-sm-9 table {

  border: 1px solid #e6e6e6;

  margin-bottom: 5px;

}

.right #single-invoice .content .s-inv-card .row .s-inv-body .col-sm-9 table tr td, .right #single-invoice .content .s-inv-card .row .s-inv-body .col-sm-9 table tr th {

  font-size: small;

  padding: 15px;

  border-bottom: 1px;

  border-top: 1px solid #e6e6e6;

}

.right #single-invoice .content .s-inv-card .row .s-inv-body .col-sm-9 table thead tr th {

  color: #7f8fa4;

}



.right #browse .header {

  background: white;

  display: block;

  border: 1px solid #e6e6e6;

  padding: 15px 30px;

  margin-left: -15px;

}

.right #browse .header h4 {

  display: inline-block;

  color: #354052;

}

.right #browse .header ul {

  right: 0;

  left: inherit;

  max-width: 350px;

}

.right #browse .header ul li {

  display: inline-block;

  padding-left: 20px;

}

.right #browse .header ul li .btn-group i.fa-user-o, .right #browse .header ul li .btn-group i.fa-bell-o {

  color: #b3b3b3;

  font-size: 24px;

  cursor: pointer;

}

.right #browse .header ul li .btn-group i.fa-user-o:nth-child(1):after, .right #browse .header ul li .btn-group i.fa-bell-o:nth-child(1):after {

  content: '3';

  background: orange;

  color: white;

  font-size: small;

  padding: 4px 7px;

  border-radius: 50%;

  position: absolute;

  top: -8px;

  left: 10px;

}

.right #browse .header ul li .btn-group i.fa-angle-down {

  cursor: pointer;

}

.right #browse .header ul li .btn-group .dropdown-menu {

  padding: 0;

}

.right #browse .header ul li .btn-group .dropdown-menu li {

  padding-left: 0;

  display: block;

  border-bottom: 1px solid #e6e6e6;

}

.right #browse .header ul li .btn-group .dropdown-menu li:nth-child(1) .alert-card i.fa {

  color: #00b300;

}

.right #browse .header ul li .btn-group .dropdown-menu li:nth-child(2) .alert-card i.fa {

  color: #b300b3;

}

.right #browse .header ul li .btn-group .dropdown-menu li:nth-child(3) .alert-card i.fa {

  color: #354052;

}

.right #browse .header ul li .btn-group .dropdown-menu li:last-child {

  border-bottom: none;

}

.right #browse .header ul li .btn-group .dropdown-menu li a {

  padding-top: 10px;

  padding-bottom: 10px;

}

.right #browse .header ul li .btn-group .dropdown-menu li a:hover {

  background: #e5e8ee;

}

.right #browse .header ul li .btn-group .dropdown-menu li a .alert-card {

  display: flex;

}

.right #browse .header ul li .btn-group .dropdown-menu li a .alert-card img, .right #browse .header ul li .btn-group .dropdown-menu li a .alert-card i.fa {

  height: 40px;

  margin-right: 15px;

}

.right #browse .header ul li .btn-group .dropdown-menu li a .alert-card p {

  color: #354052;

  margin-bottom: 0;

}

.right #browse .header ul li .btn-group .dropdown-menu li a .alert-card p small {

  color: #7f8fa4;

  width: 100%;

  white-space: pre-line;

}

.right #browse .header ul li .dropdown-avatar img {

  height: 35px;

}

.right #browse .header ul li .dropdown-avatar i.fa {

  padding-left: 8px;

}

.right #browse h5.search {

  background: white;

  padding: 30px;

  margin-left: -15px;

  margin-top: 0;

}

.right #browse .content {

  margin: 0 30px 15px 15px;

}

.right #browse .content .browse .card {

  background: white;

  padding: 15px;

}

.right #browse .content .browse .card img {

  width: 60px;

}

.right #browse .content .browse .card h5 {

  display: inline-block;

  vertical-align: middle;

}



.left:hover + .right {

  margin-left: 215px;

}



.strike {

  color: #999999;

}



hr {

  border-top: 1px solid #e6e6e6;

  margin: 10px 0;

}



.py-15 {

  padding: 15px 0;

}



.detdesa {

    color: #0FAFBB;

}



.detfecha {

    color: #0FAFBB;

}



/* Inicio Estilo Reproductor Lecturas */

    * {

  box-sizing: border-box;

}



.contenedor-slider {

  margin: auto;

  width: 100%;

  /* max-width: 670px; */

  position: relative;

  overflow: hidden;

}







.slider__section {

  width: 100%;

}



.slider__img {

  display: block;

  width: 100%;

  height: 100%;

}



.btn-prev, .btn-next {

  width: 40px;

  height: 40px;

  background: rgba(255, 255, 255, 0.7);

  position: absolute;

  /*top: 50%;*/

  /*transform: translateY(-50%);*/

  bottom: 0px;

  line-height: 40px;

  font-size: 30px;

  font-weight: bold;

  text-align: center;

  border-radius: 50%;

  font-family: monospace;

  cursor: pointer;

}



.btn-prev:hover, .btn-next:hover {

  background: white;

}



.btn-prev {

  left: 40%;

}



.btn-next {

  right: 40%;

}



#barrarepro{

background: #5d5a5a;

height: 45px;

}

/* Fin Estilo Reproductor Lecturas */



/* Inicio Estilos Estudiantes Destacados */

    .avatar {

  position: relative;

  display: inline-block;



  &:before {

    content: '';

    position: absolute;

    bottom: 0;

    right: 1px;

    width: 12px;

    height: 12px;

    border-radius: 100%;

    border: 1px solid #fff;

  }

  &.online:before {

    background-color: lime;

  }

  &.offline {

    img { opacity: 0.8; }

    &:before {

      z-index: 10;

      background-color: #f5f5f5;

      border-color: #b1b1b1;

    }

    &:after {

      font-family: 'FontAwesome';

      content: "\f1eb";

      position: absolute;

      bottom: -1px;

      right: 2px;

      color: #ff3c41;

      font-size: 8px;

      z-index: 11;

    }

  }

}



.invited {

  position: relative;

  display: inline-block;

  

  i {

    position: absolute;

    top: 0;

    right: -5px;

    width: 15px;

    height: 15px;

    background-color: #5cb85c;

    border: 1px solid #fff;

    border-radius: 100%;

    box-sizing: content-box;

    

    &:before {

      position: absolute;

      top: 1px;

      right: 2px;

      font-size: 12px;

    }

  }

}



/* Fin Estilos Estudiantes Destacados */



#evaluacion{

  margin-top: 150px;

  font-size: 18px;



}



#avancecurso{

  color:#0FAFBB;

  font-weight: bold;

}



.btn-evaluacion {

    color: #fff;

    font-weight: bold;

    background-color: #0FAFBB;

    border-color: #0FAFBB;

}



.nombreperfil{

  color: #fff;

}



@media (min-width: 1200px){

  .col-lg-8 {

      width: 55%;

  }

}



#blockedusers{

  margin-left: 20px;

  margin-top: 20px;

}



.table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {

    border-top: 0.1px solid rgb(42, 53, 82);

    border-bottom: 0;

    border-right: 0;

    border-left: 0;

    padding: 0;

    background: white;

}



table, th, td {

    border: 0;

}



#titule{

  font-weight: bold;

  color: #0fafbb;

}





input[type=checkbox], input[type=radio] {

    margin-left: 25px!important;

    margin-top: 6px;

}



.icopre {

    width: 4%;

    margin-top: 0px;

}



#btnGuardar {

    margin-top: 25px;

    margin-bottom: 20px;

    padding: 10px 40px 10px 40px;

    font-size: 16px;

}



img[src='../app/webroot/assets_ace/images/lectogamer/lecturas/undefined'] { display: none!important; }





#question{

  font-size: 1.2em;

  color: #868585;

  margin-top: 5px;

}



#quizNumber{

  font-size: 1.2em;

}







/* Estilos Input Respuestas */

   .radiobtn {

  position: relative;

  display: inline-block;

  margin-right: 20px;

}

.radiobtn label {

  display: block;

  background: #fee8c3;

  color: #444;

  border-radius: 5px;

  padding: 10px 20px;

  border: 2px solid #fdd591;

  margin-bottom: 5px;

  cursor: pointer;

}

.radiobtn label:after, .radiobtn label:before {

  content: "";

  position: absolute;

  right: 11px;

  /* top: 11px; */

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

 /* display: none; */

  position: absolute;

  outline: 0;

  width: 100%;

  height: 30px;

  -webkit-appearance: none;

     -moz-appearance: none;

          appearance: none;

  z-index: 1;

}

.radiobtn input[type="radio"]:checked + label {

  background: #fdcb77;

  -webkit-animation-name: blink;

          animation-name: blink;

  -webkit-animation-duration: 1s;

          animation-duration: 1s;

  border-color: #fcae2c;

}

.radiobtn input[type="radio"]:checked + label:after {

  background: #fcae2c;

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

/* Fin Estilos Respuestas */



.estrellas{
  background-color: #245794;
  border-radius: 12px;
}

.estrellas .medallas{
  text-align:left;
}

.escudocurso{
  
}

/* CSS  EDGAR2020 */
/*BOTONES GRANDES*/
.paralelogramo2 {
    width: 300px; 
    height: 60px; 
    opacity: 0.9;
    background: #104e7d;
    -webkit-transform: skew(50deg);
    -moz-transform: skew(50deg);
    -ms-transform: skew(50deg);
    -o-transform: skew(60deg);
    transform: skew(-30deg);
   
    border-radius: 0.5em;
    color: #ffffff;
    
    text-transform: unset;
    display: block;
    padding-top: 5px;
}
.paralelogramo2 .texto2 {
    transform: skew(30deg);
    padding-top: 5PX;
   
    padding-left: 40PX;
    font-weight: bold;
  
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
    font-size: 1.6rem;
    display: block;
   
}




</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<body>

   <!-- <main>

        <h1 class="text-center">NIVEL</h1>

        <p class="text-center">SpinnerDrak</p>

        <p class="text-center">Caballero - Nivel 10</p>

        <p><img src="imagen.png" alt="Curso de HTML5 y CSS3 en campusMVP"> Nunc iaculis laoreet...</p>



        <p>.</p>

        <h2>Subtítulo en medio del contenido</h2>

        <p>Nam sed est commodo orci blandit maximus...</p>

    </main> -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<header>



    <?php



    $usuario = $this->Session->read('usuario');

    $correo=  $usuario->correo;

    $nomUser   = $usuario->nombre;

    $apeuser   = $usuario->apellido;

    $nombre = ucwords(strtolower($nomUser));
    $apellido = ucwords(strtolower($apeuser));



    ?>



</header>



<div id="codlectura" style="display: none;">_</div>

<div id="semanaexamen" style="display: none;">_</div>
<div id="codcursoexamen" style="display: none;">_</div>

<div id="codgrupo" style="display: none;">_</div>


<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4" style="padding-top: 20PX;">
                        <div class="paralelogramo2" >
                            <div class="texto2">
                               <div class="row">
                                    
                                      <div class=" col-xs-4 col-sm-4 col-md-8">
                                            <div class="row" style="font-size: 2rem;  color: #fff;       font-weight: 600;">
                                                NICKNAME
                                            </div>
<<<<<<< HEAD
                                            <div class="row" id="nick" style="margin-bottom: 0.4rem; color: #f5f5f5; font-size: 1.2rem; ">
                                                
=======
                                            <div class="row" style="margin-bottom: 0.4rem; color: #f5f5f5; font-size: 1.2rem; ">
                                                4° SEC.
>>>>>>> dcadef4c36c0f7ca2734f9ab726685ece395be30
                                            </div>
                                      </div>
                                      <div class=" col-xs-4 col-sm-4 col-md-4">
                                        <img width="40px" height="40px" src="https://i.pinimg.com/originals/5b/61/67/5b6167f881cbf46ae638c759f033ed36.png" alt="">

                                      </div>
                                  
                               </div>
                               
                          </div>
                    </div>
                    </div>
   </div>


<div class="row" style="margin-top: 20PX;" id="perfillectura">

  <div class="col-xs-12 col-sm-3 col-md-3">

     

<<<<<<< HEAD
      <div id="imgavatar" >
      
      </div>
=======
      
      <img src="../img/pamergamer/avatars/avatar008.png" class="img-responsive" alt="Image">
>>>>>>> dcadef4c36c0f7ca2734f9ab726685ece395be30
      
      <div class="row" style=" padding-top: 33px; padding-bottom: 33px;background-color: #104e7d;border-radius: 1em;
    font-family: sans-serif;margin-top: 33px;opacity: 0.9;">
               
                    <div class="col-xs-6 col-sm-12 col-md-4">
<<<<<<< HEAD
                        <img style="padding-bottom: 10px; margin-left: auto; margin-right: auto; width: 100%;display: block;" class="img-responsive" src="../img/pamergamer/medallas/oro.png" alt="...">
                        <div style="text-align: center;font-size: 1.6rem;color: #fff; FONT-WEIGHT: BOLD;">ORO</div>
                        <div id="oro" style="text-align: center;font-size: 1.6rem;color: #fff; FONT-WEIGHT: BOLD;">0</div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <img style="padding-bottom: 10px; margin-left: auto; margin-right: auto; width: 100%;display: block;" class="img-responsive" src="../img/pamergamer/medallas/plata.png" alt="...">
                        <div style="text-align: center;font-size: 1.6rem;color: #fff; FONT-WEIGHT: BOLD;">PLATA</div>
                        <div id="plata" style="text-align: center;font-size: 1.6rem;color: #fff; FONT-WEIGHT: BOLD;">0</div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <img style="padding-bottom: 10px; margin-left: auto; margin-right: auto; width:100%;display: block;" class="img-responsive" src="../img/pamergamer/medallas/bronce.png" alt="...">
                        <div style="text-align: center;font-size: 1.6rem;color: #fff; FONT-WEIGHT: BOLD;">BRONCE</div>
                        <div id="bronce" style="text-align: center;font-size: 1.6rem;color: #fff; FONT-WEIGHT: BOLD;">0</div>
=======
                        <img style="padding-bottom: 10px; margin-left: auto; margin-right: auto; width: 100%;display: block;" class="img-responsive" src="https://i.pinimg.com/originals/c1/ec/da/c1ecda477bc92b6ecfc533b64d4a0337.png" alt="...">
                        <div style="text-align: center;font-size: 1.6rem;color: #fff; FONT-WEIGHT: BOLD;">ORO</div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <img style="padding-bottom: 10px; margin-left: auto; margin-right: auto; width: 100%;display: block;" class="img-responsive" src="https://i.pinimg.com/originals/c1/ec/da/c1ecda477bc92b6ecfc533b64d4a0337.png" alt="...">
                        <div style="text-align: center;font-size: 1.6rem;color: #fff; FONT-WEIGHT: BOLD;">PLATA</div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <img style="padding-bottom: 10px; margin-left: auto; margin-right: auto; width:100%;display: block;" class="img-responsive" src="https://i.pinimg.com/originals/c1/ec/da/c1ecda477bc92b6ecfc533b64d4a0337.png" alt="...">
                        <div style="text-align: center;font-size: 1.6rem;color: #fff; FONT-WEIGHT: BOLD;">BRONCE</div>
>>>>>>> dcadef4c36c0f7ca2734f9ab726685ece395be30
                    </div>
                </div>


  </div>

  <!-- Inicio Lecturas -->

  <div class="col-xs-12 col-md-9 col-sm-9">

      <br>

<div class="container">

    

    <ul class="nav nav-tabs tabs-marker tabs-dark bg-dark" id="myTab" role="tablist">

      <li class="nav-item" data-semana="1">

         <a class="nav-link active" id="home" data-toggle="tab" href="#home-tab2" role="tab" aria-controls="semana01" aria-selected="true">SEMANA 01<span class="marker"></span></a>

          

      </li>

      <li class="nav-item" data-semana="2">

         <a class="nav-link" id="profile" data-toggle="tab" href="#profile-tab2" role="tab" aria-controls="semana02" aria-selected="false">SEMANA 02<span class="marker"></span></a>

      </li>

      <li class="nav-item" data-semana="3">

         <a class="nav-link" id="contact" data-toggle="tab" href="#contact-tab2" role="tab" aria-controls="semana03" aria-selected="false">SEMANA 03<span class="marker"></span></a>

      </li>

      <li class="nav-item" data-semana="4">

         <a class="nav-link" id="contact" data-toggle="tab" href="#contact-tab2" role="tab" aria-controls="semana04" aria-selected="false">SEMANA 04<span class="marker"></span></a>

      </li>

      <li class="nav-item" data-semana="5">

         <a class="nav-link" id="contact" data-toggle="tab" href="#contact-tab2" role="tab" aria-controls="semana05" aria-selected="false">SEMANA 05<span class="marker"></span></a>

      </li>

      <li class="nav-item" data-semana="6">

         <a class="nav-link" id="contact" data-toggle="tab" href="#contact-tab2" role="tab" aria-controls="semana06" aria-selected="false">SEMANA 06<span class="marker"></span></a>

      </li>

      <li class="nav-item" data-semana="7">

         <a class="nav-link" id="contact" data-toggle="tab" href="#contact-tab2" role="tab" aria-controls="semana07" aria-selected="false">SEMANA 07<span class="marker"></span></a>

      </li>

    </ul>

    <div class="tab-content" id="myTabContent">

      <div class="tab-pane fade show active" id="home-tab2" role="tabpanel" aria-labelledby="home-tab">

          <!-- Inicio Cards -->

          <div class="container" id="cards">


</div>

          <!-- Fin Cards -->

      </div>

      <!-- <div class="tab-pane fade" id="contact-tab2" role="tabpanel" aria-labelledby="contact-tab">dfsdfs</div> -->

    </div>

</div>

  </div>

</div>





</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<!-- Inicio Efecto Card muestra detalle -->

<script>

$(window).load(function() {

  $('.post-module').hover(function() {

    $(this).find('.description').stop().animate({

      height: "toggle",

      opacity: "toggle"

    }, 300);

  });

});

</script>

<!-- Fin Efecto Card muestra detalle -->













<!-- Inicio Efecto Reproductor Lectura -->

     <script type="text/javascript">

       //almacenar slider en una variable

var slider = $('#slider');

//almacenar botones

var siguiente = $('#btn-next');

var anterior = $('#btn-prev');



//mover ultima imagen al primer lugar

$('#slider .slider__section:last').insertBefore('#slider .slider__section:first');

//mostrar la primera imagen con un margen de -100%

//slider.css('margin-left', '-'+100+'%');



function moverD() {

  slider.animate({

    marginLeft:'-'+200+'%'

  } ,700, function(){

    $('#slider .slider__section:first').insertAfter('#slider .slider__section:last');

    slider.css('margin-left', '-'+100+'%');

  });

}



function moverI() {

  slider.animate({

    marginLeft:0

  } ,500, function(){

    $('#slider .slider__section:last').insertBefore('#slider .slider__section:first');

    slider.css('margin-left', '-'+100+'%');

  });

}



function autoplay() {

 interval = setInterval(function(){

    moverD();

  }, 5000);

}

siguiente.on('click',function() { var interval ='';

  moverD();

  clearInterval(interval);

  //autoplay();

});



anterior.on('click',function() { var interval ='';

  moverI();

  clearInterval(interval);

  //autoplay();

});

//autoplay();



     </script>

    <!-- Fin Reproductor Lectura -->



