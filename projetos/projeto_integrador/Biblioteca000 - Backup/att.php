<?php
    include "biblioteca.class.php";
    if(isset($_GET['id'])) {
    $id_livro = $_GET['id'];
    
    // Inclui o arquivo da classe para acessar o banco de dados

    // Instancia a classe
    $b = new Biblioteca();

    // Obtém os dados da pessoa pelo ID
    $livro = $b->getLivroById($id_livro);

    // Verifica se a pessoa existe
    if($livro) {
        // Exibe o formulário com os dados preenchidos
        echo "
        <html>
        <head>
        <title>Atualizar Livro</title>
        <link rel='stylesheet' href='css/style.css'>
        </head>
        <body>
        <h2>Atualizar Livro</h2>
        <form action='slv.php' method='POST'>
            <input type='hidden' id='id_livro' name='id_livro' value='". $livro['ID_Livro'] ."'>

            <label for='nomeA'>Nome:</label><br>
            <input type='text' id='nomeA' name='nomeA' value='". $livro['Nome'] ."'><br>

            <label for='autorA'>Autor:</label><br>
            <input type='text' id='autorA' name='autorA' value='". $livro['Autor'] ."'><br>

            <label for='isbnA'>ISBN:</label><br>
            <input type='number' id='isbnA' name='isbnA' value='". $livro['ISBN'] ."'><br>

            <label for='editoraA'>Editora:</label><br>
            <input type='text' id='editoraA' name='editoraA' value='". $livro['Editora'] ."'><br>
            <input type='submit' value='Atualizar'>
        </form>
        </body>
        </html>";
    } else {
        echo "Pessoa não encontrada.";
    }
} else {
    echo "ID não foi fornecido.";
}
?>