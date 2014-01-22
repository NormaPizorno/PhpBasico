<?php

/* 
 * Funciones para validar Formularios.
 */

/**
 * Indica si un valor es un numero entero
 * @param type $valor
 */
function validarEntero($valor) {
    if(filter_var($valor, FILTER_VALIDATE_INT)) {
        return true;
    }else {
        return false;
    }
}
