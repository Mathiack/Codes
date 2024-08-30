<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Exclusão</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-sizing: border-box;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
        }
        .button-group {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .button-group input {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button-group input[type="submit"] {
            background-color: #b74c4c; /* Vermelho queimado */
            color: #fff;
        }
        .button-group input[type="submit"]:hover {
            background-color: #a63a3a; /* Vermelho queimado mais escuro no hover */
        }
        .button-group input[type="button"] {
            background-color: #6c757d; /* Cinza escuro */
            color: #fff;
        }
        .button-group input[type="button"]:hover {
            background-color: #5a6268; /* Cinza mais escuro no hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Você tem certeza que deseja excluir?</h1>
        <form action="../verAcoes.php" method="post">
            <div class="button-group">
                <input type="submit" value="Sim">
                <input type="button" value="Não" onclick="window.history.back();">
            </div>
        </form>
    </div>
</body>
</html>
