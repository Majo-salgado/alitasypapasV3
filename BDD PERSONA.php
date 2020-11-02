<?php

session_start();
require 'conexion.php';

if(!isset($_SESSION["id_usuario"])){
    header("Location: pedido.php");
}

$sql = "SELECT * FROM persona";
$result=$mysqli->query($sql);

$bandera = false;

if(!empty($_POST)){
    $nombre = mysqli_real_escape_string($mysqli,$_POST['nombre']);
    $pedido = mysqli_real_escape_string($mysqli,$_POST['numero']);

    $error ='';

    $sqlUsuario = "INSERT INTO persona (nombre, numero) VALUES('$nombre','$numero')";
			$resultUsuario = $mysqli->query($sqlUsuario);
			
			if($resultUsuario>0)
			$bandera = true;
			else
			$error = "Error al Registrar";
		}
	
?>
