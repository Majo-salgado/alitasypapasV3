<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' href='node_modules\bulma\css\bulma.min.css' type='text/css'>
    <title>Pedido</title>
</head>
<body>
<div data-role='page'>
            <center><div data-role='header'>
                <div id='logo' class='center'>
                <h1 class="title is-$red">Alitas y papas</h1>
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
    <form class="form-horizontal" method="post" action="BDD PERSONA.php">
    <fieldset>
    <br>
    <center><h1><p class="title is-$yellow">ESCRIBA SU INFORMACION PARA TENER SEGURIDAD EN EL PEDIDO</p></h1></center>
    <br>

    <div class="form-group">
    <center><div class="col-md-4">
    <input id="nombre" name="nombre" type="text" placeholder="Nombre del usuario" class="field" class="control"> 
    </div></center>
    </div>

    <div class="form-group">
    <center><div class="col-md-4">
    <input id="numero" name="numero" type="text" placeholder="Numero telefonico" class="field" class="control"> 
    </div></center>
    </div>


    <div class="form-group">
    <div class="col-md-12 text-center">
    <button type="submit" class="button is-dark">ENVIAR</button>
    </div>
    </div>
    </fieldset>
    </form>
    </div>
    </div>
    </div>
    </div>


    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="well well-sm">
    <form class="form-horizontal" method="post" action="BDD PEDIDO.php">
    <fieldset>
    <br>
    <center><h1><p class="title is-$yellow">PEDIDO</p></h1></center>
    <br>

    <div class="form-group">
    <center><div class="col-md-4">
    <input id="nombre" name="nombre" type="text" placeholder="Nombre del usuario" class="field" class="control">
    </div></center>
    </div>

    <div class="form-group">
    <center><div class="col-md-4">
    <input id="pedido" name="pedido" type="text" placeholder="Pedido" class="field" class="control"> 
    </div></center>
    </div>

    <div class="form-group">
    <center><div class="col-md-4">
    <input id="direccion" name="direccion" type="text" placeholder="Direccion del usuario" class="field" class="control"> 
    </div></center>
    </div>
    <br>

    <div class="form-group">
    <div class="col-md-12 text-center">
    <button type="submit" class="button is-dark">ENVIAR</button>
    </div>
    </div>
    </fieldset>
    </form>
    </div>
    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>