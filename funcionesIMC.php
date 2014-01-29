<?php

define ('PESO_MIN', 1); //kg
define ('PESO_MAX', 500); //kg

define ('ESTATURA_MIN', 50); //cm
define ('ESTATURA_MAX', 300); //cm

define ('MSG_ERR_PESO', 'El peso debe ser un valor ...');
define ('MSG_ERR_ESTATURA', 'La estatura debe ser un valor ...');

/**
 * Calcula el valor IMC
 * @param  peso expresada en Kg
 * @param estatura expresada en Cm
 * @return float --> resultado del calculo IMC redondeado a dos decimales
 * @link http://es.wikipedia.org/wiki/IMC
 */

function calculoIMC ($peso, $estatura) {
      $estatura = $estatura / 100; //cm-->metros
      $imc = ($peso / ($estatura*$estatura));
      return round ($imc, 2);
}
/**
 * clasificacionIMC
 * Calcula la claseificacion ...
 * @param imc Valor válodo de IMC
 * @param return string Contiene clasificacion segun valor
 * @link http://es.wikipedia.org/wiki/IMC
 */
 function clasificacionIMC($imc) {
      if ($imc < 18.5) {
             $clasificacion = "Bajo Peso";
         } elseif ($imc < 25) {
             $clasificacion = "Normal";
         } elseif ($imc <30) {
             $clasificacion = "Sobrepeso";
         } else {
             $clasificacion = "Obesidad";
         }
         return $clasificacion;
 }
 
 /**
  *enRango
  * Indica si un valor está en un rango determinado [Inicio-Fin]
  * @parma inicio
  * @param fin
  * @param valor
  * return true si valor está en el rango [Inicio-Fin], si no, False
  */
 function enRango($inicio, $fin, $valor) {
     return ($valor>=$inicio && $valor<=$fin);
 }
 
 /**
  * ValidarPeso
  * Validar peso
  * Indica si el valor de peso es correcto
  * @param peso debe ser un valor numerico entre [1-500]
  * @retun boolean True si cumple y False en caso contrario
  */
 function validarPeso($peso) {
    if (filter_var($peso, FILTER_VALIDATE_INT)) {
        $resultado = enRango(PESO_MIN, PESO_MAX, $peso);
    } else {
        $resultado = FALSE;
    }
    return $resultado;
 }
 
 /**
  * ValidarEstatura
  */
  function validarEstatura($estatura) {
    if (filter_var($estatura, FILTER_VALIDATE_INT)) {
        $resultado = enRango(ESTATURA_MIN, ESTATURA_MAX, $estatura);
    } else {
        $resultado = FALSE;
    }
    return $resultado;
 }

 
 
 
?>


