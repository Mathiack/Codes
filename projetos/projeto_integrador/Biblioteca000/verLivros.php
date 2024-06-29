<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Livros</title>
    <link rel="stylesheet" href="style.css">
    <style>
        a#voltarVerLivros {
            text-decoration: none;
            padding: 5px;
<<<<<<< HEAD
            color: black;
        }
        div#voltaVerLivros {
            padding: 7px;
        }
        table {
            width: 500px;
=======
            background-color: gray;
            border-radius: 10px;
            color: white;
        }
        div#voltaVerLivros {
            margin-top: 20px;
        }
        a.opsTable#atualizar {
            color: rgb(0, 102, 204);
            text-decoration: none;
        }
        a.opsTable#apagar {
            color: red;
            text-decoration: none;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 4px;
>>>>>>> 720889bf38f33fba04c45e96756afcf600e5dba1
        }
    </style>
</head>
<body>
    <div class="centralizado">
        <div class="titulo">
<<<<<<< HEAD
            <table border="2">
=======
            <div id="seusLivros">
                <h1>Livros Adicionados</h1>
            </div>
            <table>
>>>>>>> 720889bf38f33fba04c45e96756afcf600e5dba1
                <thead>
                    <tr>
                        <!--<th>ID</th>-->
                        <th>Nome</th>
                        <th>Autor</th>
                        <th>ISBN</th>
                        <th>Editora</th>
<<<<<<< HEAD
                        <th >Operações</th>
=======
                        <th colspan="2">Operações</th>
>>>>>>> 720889bf38f33fba04c45e96756afcf600e5dba1
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "biblioteca.class.php";
                        $b = new Biblioteca();
                        $livros = $b->listarLivros();
                        
                        foreach ($livros as $livro):
                    ?>
                    <tr>
                        <td><?php echo $livro['Nome']; ?></td>
                        <td><?php echo $livro['Autor']; ?></td>
                        <td><?php echo $livro['ISBN']; ?></td>
                        <td><?php echo $livro['Editora']?></td>
<<<<<<< HEAD
                        <td><?php echo "<a href='Ops/apagar.php?id=". $livro['ID_Livro']. "'>Apagar</a>"?></td>
                        <td><?php echo "<a href='atualizar.php?id=". $livro['ID_Livro'] ."'>Atualizar</a>"?>
=======
                        <td><?php echo "<a href='Ops/apagar.php?id=". $livro['ID_Livro']. "' class='opsTable' id='apagar'>Apagar</a>"?></td>
                        <td><?php echo "<a href='Ops/att.php?id=". $livro['ID_Livro']. "' class='opsTable' id='atualizar'>Editar</a>"?></td>

>>>>>>> 720889bf38f33fba04c45e96756afcf600e5dba1
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div id="voltaVerLivros">
<<<<<<< HEAD
                <a href="index.html" id="voltarVerLivros">Voltar à Tela Inicial</a>
=======
                <a href="index.php" id="voltarVerLivros">Voltar à Tela Inicial</a>
>>>>>>> 720889bf38f33fba04c45e96756afcf600e5dba1
            </div>
        </div>
    </div>
   
</body>
</html>
