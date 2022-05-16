<?php

 /**
  *  @author María Ladrón de Guevara Oliva
  *  @version 1.0
  * {@internal Este comentario es solo para desarrolladores.}
  */

   /**
    * Función suma de dos números
    * @param int $num1
    * @param int $num2
    * @return float
    */

  function suma ($num1, $num2) {
      $resultadosuma = $num1 + $num2;
      return $resultadosuma;

  }

$suma = suma (24,42);
echo $suma;

   /**
    * Función que suma y resta dos números.
    * @param int $num1
    * @param int $sum2
    * @return $resultado
    */

   function sumar_restar($num1, $num2){
      $resultado = array(
         'suma' => $num1 + $num2,
         'resta' => $num1 - $num2
      );
      return $resultado;
   }
   $resultado_de_suma_resta = sumar_restar(20, 7);
   echo 'La suma es: ' . $resultado_de_suma_resta['suma'] . '<br />';
   echo 'La resta es: ' . $resultado_de_suma_resta['resta'] . '<br />';

?>
