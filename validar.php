<?php

/* 
 * Funciones para validar Formularios.
 */

/**
 * Definicion de Constantes 
 */
define ('EDAD_MINIMA', 1);
define ('EDAD_MAXIMA', 100);

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

/**
 * 
 * @param type $valor
 * @param type $inicio
 * @param type $final
 * @return type
 */
function comprobarRango ($valor, $inicio, $final) {
    return ($valor>=$inicio && $valor<=$final);
}

/**
 * 
 * @param type $valor
 * @return type
 */
function validarEdad ($valor) {
    return(validarEntero($valor) && comprobarRango($valor, EDAD_MINIMA, EDAD_MAXIMA));
}