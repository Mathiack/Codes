<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Livros</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="centralizado">
        <div class="titulo">
            <table border="1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Autor</th>
                        <th>ISBN</th>
                        <th>Editora</th>

                    </tr>
                    <a href="index.html" id="voltarVerLivros">voltar</a>
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
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
   
</body>
</html>
