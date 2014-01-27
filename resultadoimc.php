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
         $estatura = $estatura / 100; //cm-->metros
         $imc = ($peso / ($estatura*$estatura));
         
         echo "Valor IMC = ";
         echo $imc;
         
         if ($imc < 18.5) {
             $clasificacion = "Bajo Peso";
         } elseif ($imc < 25) {
             $clasificacion = "Normal";
         } elseif ($imc <30) {
             $clasificacion = "Sobrepeso";
         } else {
             $clasificacion = "Obesidad";
         }
         
         echo "</br>";
         echo "Clasificacion = ".$clasificacion;
        ?>
    </body>
</html>


