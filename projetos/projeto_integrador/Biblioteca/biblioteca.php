<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="style.css">
    <style>
        a#verLivrosPHP {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="centralizado">
        <h1>Livro Adicionado</h1>
        <a href="verLivros.php"  id="verLivrosPHP" >Clique aqui para ver os Livros listados</a>
    </div>
<?php 

    include "biblioteca.class.php";
    include "conexao.php";

    $b = new Biblioteca();

    $tituloLivro = $_POST['titulo'];
    $b->setTitulo($tituloLivro);
    $autorLivro = $_POST['autor'];
    $b->setAutor($autorLivro);
    $ISBN = $_POST['isbn'];
    $b->setISBN($ISBN);
    $editora = $_POST['editoraB'];
    $b->setEditora($editora);

    $b->inserirLivro();

    function listarLivros() {
        $database = new Conexao(); //nova instancia da conexao
        $db = $database->getConnection(); //tenta conectar

        $sql = "Select * from livro";

        try {
            $stmt = $db->query($sql);
            $rs = $stmt->fetchAll(PDO::FETCH_ASSOC); //rs = result -> resultado  ::::: fetchAll == ecncapsula realizando o processo concatenativo em todos os itens/objetos presentes no ambiente
            return $rs;
        } catch(PDOExeption $e) {
            echo 'Erro ao listar livro(s): ' . $e->getMessage();
            $rs = [];
            return $rs;
        }
    }
    //$b->listarLivros();
?>
</body>
</html>
