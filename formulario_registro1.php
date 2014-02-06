<?php
session_start();
$login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";

$email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";
$errores = (isset($_SESSION['errores']))?
        $_SESSION['errores']:array();
unset($_SESSION['errores']);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>Registro</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
</head>
<body>
<div>Registro</div>
<div>
    <?php
    print_r($errores);
    ?>
</div>
<form action="resultadoRegistro1.php" method="GET">
    <div>Login: <input type="text" name="login" value="<?php echo $login;?>"/> </div>
    <div>Password <input type="password" name="password"/></div>
    <div>Re-Password <input type="password" name="passwordr"/></div>
    <div>Email <input type="text" name="email" value="<?php echo $email;?>"/></div>
    <div><input type="submit" value="Enviar" /></div>
</form>
</body>
</html>



