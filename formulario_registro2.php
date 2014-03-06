<?php
session_start();

// Estructura campos del formulario
$login = (isset($_SESSION['login']))?
            $_SESSION['login']:"";

//$password no se recupera, se reescribe siempre
//$password2 no se recupera, se reescribe siempre

$email = (isset($_SESSION['email']))?
            $_SESSION['email']:"";

// Estructura para errores
$errLogin = (isset($_SESSION['errLogin']))?
            $_SESSION['errLogin']: FALSE;
$errPassword = (isset($_SESSION['errPassword']))?
            $_SESSION['errPassword']: FALSE;
$errPassword2 = (isset($_SESSION['errPassword2']))?
            $_SESSION['errPassword2']: FALSE;
$errEmail = (isset($_SESSION['errEmail']))?
            $_SESSION['errEmail']: FALSE;

$_SESSION['errLogin']=FALSE;
$_SESSION['errPassword']=FALSE;
$_SESSION['errPassword2']=FALSE;
$_SESSION['errEmail']=FALSE;
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
    <div><?php 
        print_r($login);
    ?></div>
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



