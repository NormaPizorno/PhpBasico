<?php 
session_start();
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
        $resultadoValidacion[0] = MSG_ERR_LOGIN; 
        
    }
    if (!validarPassword($password)) {
        $resultadoValidacion[1] = MSG_ERR_PASSWORD;
        
    }
     
    if (!PassIgual($password, $password2)) {
        $resultadoValidacion[2] = MSG_ERR_PASSWORD2;
        
    }
    if (!ValidarEmail($email)) {
        $resultadoValidacion[3] = MSG_ERR_EMAIL;
        
    }
    return $resultadoValidacion;
}

function hayErrores ($errores) {
    for ($i=0; $i<4; $i++) {
        if (strlen($errores[$i])>0) {
            return TRUE;
        }
            
    }
    return FALSE;
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
            if (!hayErrores ($errores)) {
                echo "Datos correctos. Se puede registrar...";
            } else {
                $_SESSION['errores'] = $errores;
                $URL = "formulario_registro1.php?".
                        $_SERVER['QUERY_STRING'];
                header ('Location:' .$URL);
                
            }
            
            
           
            
        ?>
    </body>
</html>

