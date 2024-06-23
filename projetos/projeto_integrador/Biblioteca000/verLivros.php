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
            background-color: gray;
            border-radius: 10px;
        }
    </style>
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
            <div>
                <a href="index.html" id="voltarVerLivros">Voltar à Tela Inicial</a>
            </div>
        </div>
    </div>
   
</body>
</html>
