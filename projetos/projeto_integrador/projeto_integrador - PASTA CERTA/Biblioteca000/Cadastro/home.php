<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <style>
        @charset "UTF-8";
        * {
            font-family: monospace;
        }
        body {
        }
        div.boxHome {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: whitesmoke;
            padding: 20px;
            border-radius: 10px;
        }
        section#acoes > div.boxHome > a {
            text-decoration: none;
            color: black;
            font-size: 25px;
            background-color: gray;
            padding: 5px;
            border-radius: 5px;
            color: white;
        }
        section#acoes > div.boxHome > p {
            font-size: 30px;
        }
        h1 {
            font-size: 40px;
        }
    </style>
</head>
<body>
    <section id="acoes">
        <div class="boxHome">
            <h1>Olá!</h1>
            <p>Cadastre-se para registrar seus livros</p>
            <a href="login.php">Login</a>
            <br>
            <br>
            <a href="cadastro.php">Cadastro</a>
        </div>
    </section>
</body>
</html>