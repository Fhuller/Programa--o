<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'authentication');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];

if($con){
    $reg= "insert into users(username, password, email) values ('$username', '$password', '$email')";
    mysqli_query($con, $reg);
    echo "<script>alert('Registrado com Sucesso!');</script>";
}
?>