<?php require_once 'funcionesIMC.php';
?>
<html>
    <head>
        <title>Resultado IMC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <?php 
        //print_r($_REQUEST)
         $peso = $_REQUEST['peso'];
         $estatura = $_REQUEST['estatura'];
         $errores = array();
         if (!validarPeso($peso)) {
             $errores[] = MSG_ERR_PESO;
         }
          if (!validarEstatura($estatura)) {
             $errores[] = MSG_ERR_ESTATURA;
         }
         if (count($errores)>0) {
             echo "Errores </br>";
             foreach ($errores as $error) {
                 echo $error.'</br>';
             }
         } else{
  
         //Calculo
         $imc =  calculoIMC($peso, $estatura);
         $clasificacion = clasificacionIMC($imc);
                  
         //imprimo
         echo "IMC = ".$imc;
         echo "</br>";
         echo "Clasificacion = ".$clasificacion;
         }
        ?>
    </body>
</html>


