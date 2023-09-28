<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'authentication');

if(empty($_POST['usuario_login']) || empty($_POST['password_login'])){
    header('location: register.php');
    exit();
}

$usuario_login = mysqli_real_escape_string($con, $_POST['usuario_login']);
$password_login = mysqli_real_escape_string($con, $_POST['password_login']);

$query = "select * from users where username = '{$usuario_login}' and password = '{$password_login}'";

$result = mysqli_query($con, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario_login'] = $usuario_login;
    header('Location: index.php');
    $_SESSION['not_loged'] = false;
    exit();
}
else{
    $_SESSION['not_loged'] = true;
    
    header('Location: register.php');
}