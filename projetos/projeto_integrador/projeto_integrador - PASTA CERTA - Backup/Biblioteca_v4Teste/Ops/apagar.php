<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        div.linkST {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="centralizado">
        <?php
            include "../Estante/biblioteca.class.php";

            if(isset($_GET['id'])) {
                $id_Livro = $_GET['id'];

                $b = new Biblioteca();
                ?>
                <style>
                    div.linkVolta > a {
                        text-decoration: none;
                        color: black;
                    }
                </style>
                <?php

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

        ?>
        <div class='linkVolta'>
            <a href='../Estante/verLivros.php' id=''>Voltar aos Registros</a>
        </div>
    </div>
</body>
</html>
