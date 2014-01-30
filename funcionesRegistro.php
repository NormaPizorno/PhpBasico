<?php
function enRango($inicio, $fin, $valor) {
    return ($valor>=$inicio && $valor<=$inicio);
}
define ('LOGIN_MIN', 3); 
define ('LOGIN_MAX', 10);

define ('PASSWORD_MIN', 5);
define ('PASSWORD_MAX', 10);


/**
 * Longitud maxima
 */
function validarLogin ($login) {
    $patron = "/^[[:alnum:]]+$/";
    $longitud = strlen($login);
    return (enRango(LOGIN_MIN, LOGIN_MAX, $longitud) && preg_match($patron, $login));
}

?>