<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana", "QUARTA", time() + 3600);//setando os cookies

                session_start();//iniciando a sessão
                $_SESSION['teste']= "FUNCIONOU!";//usando p/ ver se funciona

                echo "<h1>Superglobal GET</h1>";//recebe depois da URL, chamada de QUERY STRING
                var_dump($_GET);
                echo "<h1>Superglobal POST</h1>";//recebe dos forms
                var_dump($_POST);
                echo "<h1>Superglobal REQUEST</h1>";//GET e POST num só
                var_dump($_REQUEST);
                echo "<h1>Superglobal COOKIE</h1>";//cookies da pagina
                var_dump($_COOKIE);
                echo "<h1>Superglobal SESSION</h1>";//sessão
                var_dump($_SESSION);
                echo "<h1>Superglobal ENV</h1>";//mostra tudo, literalemente tudo! Environmental = ambiente
                var_dump($_ENV);
                echo "<h1>Superglobal SERVER</h1>";//mostra tudo, o local do arquivo, navegador, máquina, etc
                var_dump($_SERVER);
                echo "<h1>Superglobal GLOBALS</h1>";//mostra todas as Superglobais, mesmo que você não tenha usado
                var_dump($GLOBALS);

            ?>
        </pre>
    </main>
</body>
</html>