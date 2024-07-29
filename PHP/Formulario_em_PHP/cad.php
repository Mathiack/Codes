<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            //variavel que mostra tudo que eu fiz antes, n sei pq = var_dump($_GET);
            //daí tem essa aq tmb = var_dump($_REQUEST);
            $n = $_GET['nome'];
            $s = $_GET['snome'];
            echo "É um prazer te conhecer " . $n . "!";
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar à página anterior</a>
    </main>
</body>
</html>