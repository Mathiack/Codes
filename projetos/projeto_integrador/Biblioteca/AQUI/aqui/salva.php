<?php

include "biblioteca.class.php";

//criação de um objeto ( p )
$b = new Biblioteca();

$id = $_POST['id'];
$nome = $_POST['nome'];
$autor = $_POST['autor'];
$isbn = $_POST['isbn'];
$editora = $_POST['editora'];

//setagem
$b->setId_LivroA($id);
$b->setTituloA($nome);
$b->setAutorA($tituloLivroA);
$b->setISBNa($isbn);
$b->setEditoraA($editora);

echo "<link rel='stylesheet' href='css/style.css'>";

// mensagem de inserção
if ($p->updateLivros()) {
    echo "<div class='link'>Pessoa atualizada com sucesso!</div> <br>";
} else {
    echo "<div class='link'>Erro ao atualizar pessoa.</div> <br>";
}
//link para o listarPessoas.php
echo "
<div class='link'>
<a href='verLivros.php'>TABELA LIVROS</a>
</div>
"

?>