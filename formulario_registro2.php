<?php
session_start();

// Estructura campos del formulario
$login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";

//$password no se recupera ...
//$password2 no se recupera

$email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";

// Estructura para errores
$errLogin = (isset($_REQUEST['errLogin']))?
            $_REQUEST['errLogin']: FALSE;
$errPassword = (isset($_REQUEST['errPassword']))?
            $_REQUEST['errPassword']: FALSE;
$errPassword2 = (isset($_REQUEST['errPassword2']))?
            $_REQUEST['errPassword2']: FALSE;
$errEmail = (isset($_REQUEST['errEmail']))?
            $_REQUEST['errEmail']: FALSE;

unset($_SESSION['errLogin']);
unset($_SESSION['errPassword']);
unset($_SESSION['errPassword2']);
unset($_SESSION['errEmail']);
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
<form action="resultadoRegistro2.php" method="GET">
    <div>Login: <input type="text" name="login" value="<?php echo $login;?>"/> </div>
        <div><?php 
            if ($errLogin) echo MSG_ERR_LOGIN;
        ?></div>
    <div>Password <input type="password" name="password"/></div>
        <div><?php 
            if ($errPassword) echo MSG_ERR_PASSWORD;
        ?></div>
    <div>Re-Password <input type="password" name="password2"/></div>
        <div><?php 
            if ($errPassword2) echo MSG_ERR_PASSWORD2;
        ?></div>
    <div>Email <input type="text" name="email" value="<?php echo $email;?>"/></div>
        <div><?php 
            if ($errEmail) echo MSG_ERR_EMAIL;
        ?></div>
    <div><input type="submit" value="Enviar" /></div>
</form>
</body>
</html>



