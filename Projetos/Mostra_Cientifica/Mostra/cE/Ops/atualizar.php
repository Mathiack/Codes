        <?php 
        session_start();
         if(isset($_GET['id'])) {
            $id_Livro = $_GET['id'];
         }
         print_r($id_Livro);
            ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Atualizar Livro</title>
            <link rel="stylesheet" href="../style.css">
            <style>
                * {
                    font-family: monospace;
                }
            </style>
        </head>
        <body>
            <h2>Atualizar Livro</h2>
            <form action="atualizar2.php" method="POST">
                <input type="hidden" id="id_Livro" name="id_Livro">
                
                <label for="nome">Título:</label><br>
                <input type="text" id="nome" name="nome"><br>
                
                <label for="autor">Descrição:</label><br>
                <input type="text" id="autor" name="autor"><br>
                
                <label for="isbn">Sentimento:</label><br>
                <input type="number" id="isbn" name="isbn"><br>
                
                <input type="submit" value="Atualizar">
            </form>
        </body>
        </html>