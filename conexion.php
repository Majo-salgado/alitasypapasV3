<?php
$mysqli=new mysqli("localhost","root","","alitas y papas");

if(mysqli_connect_error()){
    echo 'conexion fallida:', mysqli_connect_error();
    exit();
}
?>