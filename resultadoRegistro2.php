<?php 
session_start();
require_once 'funcionesRegistro.php';
require_once 'errores_registro_2.php';
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
    
    $resultadoValidacion = array ('','','','');
    /**
     * 
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
        $_SESSION['errLogin'] = TRUE; 
        
    }
    if (!validarPassword($password)) {
        $_SESSION['errPassword'] = TRUE;
        
    }
     
    if (!PassIgual($password, $password2)) {
        $_SESSION['errPassword2'] = TRUE;
        
    }
    if (!ValidarEmail($email)) {
        $_SESSION['errEmail'] = TRUE;
        
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
           validarDatosRegistro();
            if (!$_SESSION['errLogin'] && $_SESSION['errPassword']) {
                echo "Datos correctos. Se puede registrar...";
            } else {
                $_SESSION['errores'] = $errores;
                $URL = "formulario_registro2.php?".
                        $_SERVER['QUERY_STRING'];
                header ('Location:' .$URL);
                
            }
            
            
           
            
        ?>
    </body>
</html>

