<?php 
/**
 * Verifica que los datos recibidos por $_REQUEST son válidos
 * @return boolean True si son válidos, false en caso contrario
 */
function validarDatosRegistro() {
    /**
     * Validar login
     * Validar Password
     * Validar Password2 = Password
     * Validar email
     */
}
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <?php
            if (validarDatosRegistro()) {
                echo "Datos correctos. Se puede registrar.";
            } else {
                echo "Error en los datos";
            }
            
            
           
            
        ?>
    </body>
</html>

