<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' href='node_modules\bulma\css\bulma.min.css' type='text/css'>
</head>
<body>
<div data-role='page'>
            <center><div data-role='header'>
                <div id='logo' class='center'>
                <h1 class="title is-$green">Alitas y papas</h1>
                <div class= 'username'></div>
            </div>
            <div data-role='content'>

<div class='center'>
            <a  class="button is-dark" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='inicio'
            data-transition='slide' href='index.php'>Inicio</a>
            <a  class="button is-dark" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='inicio'
            data-transition='slide' href='menu.php'>Menu</a>
            <a  class="button is-dark" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='plus'
            data-transition="slide" href='administrador.php'>Administrador</a>
            <a  class="button is-dark" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='check'
            data-transition="slide" href='pedido.php'>Realizar pedido</a>
            <br>
            <br>
            
        </div></center>

        <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="well well-sm">
    <form class="form-horizontal" method="post" action="BDD PEDIDO.php">
    <fieldset>
    <br>
    <center><h1><p class="title is-$blue">INICIO DE SESION ADMINISTRADOR</p></h1></center>
    <br>

    <div class="form-group">
    <center><div class="col-md-4">
    <input id="nombre" name="nombre" type="text" placeholder="Nombre del usuario" class="control">
    </div></center>
    </div>

    <div class="form-group">
    <center><div class="col-md-4">
    <input id="pedido" name="pedido" type="text" placeholder="Contraseña" class="control">
    </div></center>
    </div>

    <div class="form-group">
    <div class="col-md-12 text-center">
    <a class="button is-dark" href="inicio sesion correcto.php" role="button">INICIAR SESION</a>
    </div>
    </div>
    </fieldset>
    </form>
    </div>
    </div>
    </div>
    </div>
    
<script src="botstrap/jquery-3.4.1.slim.min.js"></script>
<script src="botstrap/popper.min.js"></script>
<script src="botstrap/bootstrap.min.js"></script>
</body>
</html>

