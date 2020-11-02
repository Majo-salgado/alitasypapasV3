<?php 
  session_start();
echo <<<_INIT
  <!DOCTYPE html> 
  <html>
    <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>                 
      <script src='node_modules/jquery/dist/jquery.min.js'></script>
      <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>      
      <link rel='stylesheet' href='node_modules\bulma\css\bulma.min.css' type='text/css'>  
      <script src='javascript.js'></script>
      <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
      
      
_INIT;
    require_once 'functions.php';
  
    if (isset($_SESSION['user'])) {
        $user    = $_SESSION['user'];
        $loggedin = TRUE;
        $userstr  = "Sesion iniciada como: $user";
    }
    else $loggedin = FALSE;

echo <<<_MAIN
        <title> Alitas y papas</title>
    </head> 
    <body>
    <center><div data-role='page'>
            <div data-role='header'>
                <div id='logo' class='center'>
                <h1 class="title is-1">Alitas y papas</h1>
                <div class= 'username'></div>
            </div>
            <div data-role='content'></center>
_MAIN;
    if ($loggedin) {
echo <<<_LOGGEDIN
        <div class='center'>
            <a  class="button is-dark" role="button" aria-pressed="true" data-inline='true' data icon='inicio'
            data-transition="slide"
            href='members.php?view='>Inicio</a>
            <a  class="button is-dark" role="button" aria-pressed="true" data-inline='true' data icon='user'
            data-transition="slide" href='members.php'>Miembros</a>
            <a  class="button is-dark" role="button" aria-pressed="true" data-inline='true' data icon='heart'
            data-transition="slide" href='friends.php'>Amigos</a><br>
            <br>
            <a class="button is-dark" role="button" aria-pressed="true" data-inline='true' data icon='mail'
            data-transition="slide" href='messages.php'>Mensajes</a>
            <a  class="button is-dark" role="button" aria-pressed="true" data-inline='true' data-icon='edit'
            data-transition="slide" href='profile.php'>Editar Perfil</a>
            <a  class="button is-dark" role="button" aria-pressed="true" data-inline='true' data-icon='action'
            data-transition="slide" href='logout.php'>Salir de la sesion</a>
        </div>
_LOGGEDIN;
    }
    else {
echo <<<_GUEST
        <div class='center'>
            <center><a  class="button is-dark" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='inicio'
            data-transition='slide' href='index.php'>Inicio</a>
            <a  class="button is-dark" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='inicio'
            data-transition='slide' href='menu.php'>Menu</a>
            <a  class="button is-dark" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='plus'
            data-transition="slide" href='administrador.php'>Administrador</a>
            <a  class="button is-dark" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='check'
            data-transition="slide" href='pedido.php'>Realizar pedido</a>
            <br>
            <br>
            <img src="alitas y papas.jpg"></center>
        </div>

_GUEST;
    }
?>