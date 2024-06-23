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
            color: black;
        }
        div#voltaVerLivros {
            padding: 7px;
        }
        table {
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="centralizado">
        <div class="titulo">
            <table border="2">
                <thead>
                    <tr>
                        <!--<th>ID</th>-->
                        <th>Nome</th>
                        <th>Autor</th>
                        <th>ISBN</th>
                        <th>Editora</th>
                        <th >Operações</th>
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
                
                        <td><?php echo "<a href='atualizar.php?id=". $livro['ID_Livro'] ."'>". $livro['ID_Livro'] ."</a>"?></td>
                        <td><?php echo $livro['Nome']; ?></td>
                        <td><?php echo $livro['Autor']; ?></td>
                        <td><?php echo $livro['ISBN']; ?></td>
                        <td><?php echo $livro['Editora']?></td>
                        <td><?php echo "<a href='Ops/apagar.php?id=". $livro['ID_Livro']. "'>Apagar</a>"?></td>
                        <td><?php echo "<a href='atualizar.php?id=". $livro['ID_Livro'] ."'>Atualizar</a>"?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div id="voltaVerLivros">
                <a href="index.html" id="voltarVerLivros">Voltar à Tela Inicial</a>
            </div>
        </div>
    </div>
   
</body>
</html>
