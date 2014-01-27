<?php
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
?>


