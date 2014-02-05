<?php require_once 'funcionesRegistro.php';
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
    
    $resultadoValidacion = True;
    /**
     * Comprobamos que existen las variables
     */
    $login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";
    $password = (isset($_REQUEST['password']))?
            $_REQUEST['password']:"";
    $password2 = (isset($_REQUEST['password2']))?
            $_REQUEST['password2']:"";
    $email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";
    /**
     * Hacemos if relaccionados con las funciones de "funcionesRegistro"
     */
    if (!validarLogin($login)) {
        $resultadoValidacion = FALSE;
        echo "Error login";
    }
    if (!validarPassword($password)) {
        $resultadoValidacion = FALSE;
        echo "Error pass";
    }
     
    if (!PassIgual($password, $password2)) {
        $resultadoValidacion = FALSE;
        echo "Error pass=pass";
    }
    if (!ValidarEmail($email)) {
        $resultadoValidacion = FALSE;
        echo "Error email";
    }
    return $resultadoValidacion;
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

