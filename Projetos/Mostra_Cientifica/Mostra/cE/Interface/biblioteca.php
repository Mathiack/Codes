<?php
session_start();
if (!isset($_SESSION['ID_User'])) {
        header('Location: login.php');
        exit();
    }
    
    $ID_User = $_SESSION['ID_User'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        a#verLivrosPHP {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="centralizado">
        <h1>Ação Adicionado</h1>
        <a href="verLivros.php"  id="verLivrosPHP" >👉Clique aqui para ver as Ações listadas</a>
    </div>
<?php 

    include "biblioteca.class.php";

    $b = new Biblioteca();
    
    $b->setId_User($ID_User);
    $tituloLivro = $_POST['titulo'];
    $b->setTitulo($tituloLivro);
    $autorLivro = $_POST['autor'];
    $b->setAutor($autorLivro);
    $ISBN = $_POST['isbn'];
    $b->setISBN($ISBN);

    $b->inserirLivros();
    $b->listarLivros();
    
?>
</body>
</html>
