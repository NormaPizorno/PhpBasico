<?php
/**
 * Definir rango para login y para password
 */
function enRango($inicio, $fin, $valor) {
    return ($valor>=$inicio && $valor<=$fin);
}
/**
 * Definir longitud de login y de password
 */
define ('LOGIN_MIN', 3); 
define ('LOGIN_MAX', 10);

define ('PASSWORD_MIN', 5);
define ('PASSWORD_MAX', 10);


/**
 * Longitud login
 */
function validarLogin ($login) {
    $patron = "/^[[:alnum:]]+$/";
    $longitud = strlen($login);
    return (enRango(LOGIN_MIN, LOGIN_MAX, $longitud) 
            && preg_match($patron, $login));
}

/**
 * longitud password
 */

function validarPassword ($password) {
    $patron = "/^[[:alnum:]]+$/";
    $longitud = strlen($password);
    return (enRango(PASSWORD_MIN, PASSWORD_MAX, $longitud) 
            && preg_match($patron, $password));
}

/**
 * Comprobar que $password=$password2
 */
function PassIgual ($password, $password2) {
    return ($password == $password2);
}

/**
 * Validar e-mail
 */

function ValidarEmail ($email) {
    return (filter_var($email, FILTER_VALIDATE_EMAIL));
}

?>