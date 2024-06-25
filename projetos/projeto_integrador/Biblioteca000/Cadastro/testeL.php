<?php
    // Acessa
    include_once ('conexao.php');
    $database = new Conexao(); 
    $db = $database->getConnection();

    session_start();
    // print_r($_REQUEST);
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email: ' . $email);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);
        
        $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
        $stmt = $db->prepare($sql);
        $stmt->execute(['email' => $email, 'senha' => $senha]);

        //print_r($sql);
        //print_r($stmt);
    
    if($stmt->rowCount() < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: Biblioteca000/index.php');    //redirecionar para a biblioteca pagina inicial
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>