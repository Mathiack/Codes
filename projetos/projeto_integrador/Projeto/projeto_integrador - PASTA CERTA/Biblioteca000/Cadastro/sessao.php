<?php

session_start();
include_once "../conexao.php";

if ((!isset($_SESSION['email']) || !isset($_SESSION['senha']))) {
    
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    exit(); // 
}
$logado = $_SESSION['ID_User'];
var_dump($logado);