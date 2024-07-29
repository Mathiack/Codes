<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisado</h1>
        <?php 
            $num = $_POST['n'] ?? 0;

            echo"<p>Analisando o numero <strong>" . number_format($num, 3, ",", "." ) . "</strong> deu pra ver que:";

            $int = (int) $num;
            $fra = $num - $int;

            echo"<ul><li>A parte inteira é <strong>" .number_format($int, 0, ",", "."). "</strong></li>";
            echo"<li>A parte fracionária do número é <strong>". number_format($fra, 5, ",", ".") ."</li>";
        ?>
    <br>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>