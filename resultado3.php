<?php require_once 'validar.php'; ?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Validación formulario</div>
        <?php

        //Entrada datos
           $nombre = $_REQUEST['nombre'];
           $edad = $_REQUEST['edad'];
           $beca = isset($_REQUEST['beca']);
           $sexo = (isset($_REQUEST['sexo']))?$_REQUEST['sexo']:false;
           $estado = (isset($_REQUEST['estado']))?$_REQUEST['estado']:false;
           $aficiones = (isset($_REQUEST['aficiones']))?$_REQUEST['aficiones']:false;
           
        //Validar datos
        $error = false;
        $mensaje_error = " ERROR ";
        
        //validar sexo
        if (!$sexo) {
            $error = true;
            $mensaje_error .= "Sexo no elegido";
        }
  
        //validar estado civil
        if (!$estado) {
            $error = true;
            $mensaje_error .= "Estado civil no elegido ... </br>";
        }
        
        //validar aficiones
        if (!$aficiones) {
            $error = true;
            $mensaje_error .= "Afición no elegida ... </br>";
        }
        
        
        
        //validar nombre
        $nombre = limpiarTexto($nombre);
         if (!validarNombreEstricto($nombre)) {
             $error = true;
             $mensaje_error .= " Nombre obligatorio ";
         }
         //validar edad
        if (!validarEdad($edad)) {
            $error = true;
            $mensaje_error .= "Edad debe ser un número";
        }
  
        
        
        //Calculo y salida
         if (!$error) {
             //Si no hay error
            if ($edad>=18) {
                echo $nombre. " es mayor de edad </br>";
            } else {
                echo $nombre. " es menor de edad </br>";
            }
            if ($beca) {
                echo "Solicita beca </br>";
            } else {
                echo "No solicita beca </br>";
            }  
            if ($sexo) {
                echo "sexo = ".$sexo."</br>";
                echo "Estado civil = ".$estado."</br>";
                echo "Aficion = ".$aficiones."</br>";
                print_r($aficiones);
            }
          } else {
            //Si ha error
            echo $mensaje_error;
            echo "<a href='javascript:history.go(-1);'> Volver al formulario </a>";
          }
        ?>
    </body>
</html>