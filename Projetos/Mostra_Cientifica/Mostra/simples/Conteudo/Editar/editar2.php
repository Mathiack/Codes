<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ação</title>
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
            max-width: 500px;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        textarea {
            height: 100px;
        }
        .radio-group {
            display: flex;
            gap: 10px;
        }
        .radio-group label {
            margin: 0;
        }
        .button-group {
            text-align: center;
        }
        .button-group input {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #b74c4c; /* Vermelho queimado */
            color: #fff;
            cursor: pointer;
        }
        .button-group input:hover {
            background-color: #a63a3a; /* Vermelho queimado mais escuro no hover */
        }
        .button-group input[type="button"] {
            background-color: #b74c4c; /* Cinza escuro */
        }
        .button-group input[type="button"]:hover {
            background-color: #a63a3a; /* Cinza mais escuro no hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Ação</h1>
        <form action="../verAcoes.php" method="post">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" value="Academia" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" required>Bati meu recorde de peso no supino.</textarea>
            </div>
            <div class="form-group">
                <label>Sentimento</label>
                <div class="radio-group">
                    <label><input type="radio" name="sentimento" value="feliz" checked required> Feliz</label>
                    <label><input type="radio" name="sentimento" value="neutro" required> Neutro</label>
                    <label><input type="radio" name="sentimento" value="triste" required> Triste</label>
                </div>
            </div>
            <div class="button-group">
                <input type="submit" value="Enviar">
                <input type="button" value="Voltar" onclick="window.history.back();">
            </div>
        </form>
    </div>
</body>
</html>
