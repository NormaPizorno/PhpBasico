<?php require_once 'funcionesIMC.php';
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <?php 
        //print_r($_REQUEST)
         $peso = $_REQUEST['peso'];
         $estatura = $_REQUEST['estatura'];
         $imc = 0.0;
         $clasificacion = "";
         
         //Calculo
         $imc =  calculoIMC($peso, $estatura);
         $clasificacion = clasificacionIMC($imc);
         //imprimo
         echo "IMC = ".$imc;
         echo "</br>";
         echo "Clasificacion = ".$clasificacion;
        ?>
    </body>
</html>


