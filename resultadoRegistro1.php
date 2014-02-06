<?php 
require_once 'funcionesRegistro.php';
require_once 'errores_registro.php';
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
    
    $resultadoValidacion = array();
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
        $resultadoValidacion[] = MSG_ERR_LOGIN; 
        
    }
    if (!validarPassword($password)) {
        $resultadoValidacion[] = MSG_ERR_PASSWORD;
        
    }
     
    if (!PassIgual($password, $password2)) {
        $resultadoValidacion[] = MSG_ERR_PASSWORD2;
        
    }
    if (!ValidarEmail($email)) {
        $resultadoValidacion[] = MSG_ERR_EMAIL;
        
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
        <div>Resultado Registro</div>
        <?php
            $errores = validarDatosRegistro();
            if (count ($errores) == 0) {
                echo "Datos correctos. Se puede registrar.";
            } else {
                $_SESSION['errores'] = $errores;
                $URL = "formulario_registro1.php".
                        $_SERVER['QUERY_STRING'];
                header ('location:' .$URL);
                
            }
            
            
           
            
        ?>
    </body>
</html>

