<?php 

session_start();
$_SESSION['not_loged'] = true;
header('Location: index.php');

?>