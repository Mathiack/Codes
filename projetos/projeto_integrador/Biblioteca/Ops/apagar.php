
<?php
include "../biblioteca.class.php";

if(isset($_GET['id'])) {
    $id_Livro = $_GET['id'];

    $b = new Biblioteca();

    $b->setId_Livro2($id_Livro);
    echo "<link rel='stylesheet' href='../style.css'>";
    if ($b->deletarLivros()) {
        echo "<div class='link'>Livro apagado com sucesso!</div> <br>";
    } else {
        echo "<div class='link'>Erro ao apagar livro.</div> <br>";
    }
} else {
    echo "ID do Livro não fornecido.";
}

echo "<div class='link'><a href='../verLivros.php'>TABELA PESSOAS</a>
</div>";
?>