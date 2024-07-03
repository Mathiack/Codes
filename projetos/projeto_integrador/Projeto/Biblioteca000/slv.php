<?php

include "biblioteca.class.php";

//criação de um objeto ( p )
$b =  new Biblioteca();

//puxagem do html
$nomeA = $_POST['nomeA'];
$autorA = $_POST['autorA'];
$isbnA = $_POST['isbnA'];
$editoraA = $_POST['editoraA'];
$id = $_POST['id_livro'];

//setagem

$b->setTitulo($nomeA);
$b->setAutor($autorA);
$b->setISBN($isbnA);
$b->setEditora($editoraA);
$b->setId_Livro($id);

echo "<link rel='stylesheet' href='css/style.css'>";

// mensagem de inserção
$b->updateLivros();
//link para o listarPessoas.php
echo "
<div class='link'>
<a href='verLivros.php'>TABELA LIVROS</a>
</div>
"

?>