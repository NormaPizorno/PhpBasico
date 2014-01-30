<?php require_once 'funcionesIMC.php';
?>
<html>
    <head>
        <title>Calculo IMC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>IMC</div>
        <form action="resultadoimc_1.php" method="get">
            <p>Introducir Peso (Kg) <input type="text" name="peso">
            <div>
            <?php 
                if (isset($_REQUEST['error_peso'])) {
                    echo MSG_ERR_PESO;
                }
            ?>
            </div>
            </p>
            <p>Introducir Estatura (Cm) <input type="text" name="estatura">
            <div>
            <?php 
                if (isset($_REQUEST['error_estatura'])) {
                    echo MSG_ERR_ESTATURA;
                }
            ?>
            </div>
            </p>
            <p><input type="submit" value="Enviar"/></p>
        </form>
    </body>
</html>