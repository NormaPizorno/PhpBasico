<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <?php
        //Entrada datos
            if (isset($_REQUEST['nombre'])) {
                $nombre = $_REQUEST['nombre'];
            }
            $edad = $_REQUEST['edad'];
            
            
      
            //Validar datos
        $error = false;
        $mensaje_error = " ERROR ";
        
        
        //validar nombre
         if ($nombre == "") {
             $error = true;
             $mensaje_error .= " Nombre obligatorio ";
         }
         
         
         
         //validar edad
        if (!is_numeric($edad)) {
            $error = true;
            $mensaje_error = "Edad debe ser un número";
            
        } else {
            //Es un numero --> Verificar que está en el rango (0,100)
            if ($edad <= 0 || $edad > 100) {
                $error = true;
                $mensaje_error = " La edad debe ser un numero entre 0 y 100 <br> ";
            }
        }
        
        
        
        //Calculo y salida
         if (!$error) {
             //Si no hay error
            if ($edad>=18) {
                echo $nombre. " es mayor de edad ";
            } else {
                echo $nombre. " es menor de edad ";
            }
            
          } else {
            //Si ha error
            echo $mensaje_error;
            echo "<a href='javascript:history.go(-1);'> Volver al formulario </a>";
          }
        ?>
    </body>
</html>
