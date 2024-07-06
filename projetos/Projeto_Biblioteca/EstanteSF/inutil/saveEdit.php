<?php
    include_once "conexao.php";
    $database = new Conexao(); 
    $db = $database->getConnection();

    if(isset($_POST['update']))
    {
        $id_usuario = $_POST['id_usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sqlInsert = "UPDATE usuario SET senha='$senha', email='$email' WHERE id_usuario = $id_usuario";
        $result = $db->query($sqlInsert);
        if($result){
            header('Location: sistema.php');
        } else {
            echo "Erro ao editar usuario" . $db->error;
        }
    }
?>