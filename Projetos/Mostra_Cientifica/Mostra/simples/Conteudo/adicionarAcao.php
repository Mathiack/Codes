<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Ação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
        }
        .form-container h2 {
            margin-top: 0;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 20px; 
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px; 
        }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box; 
        }
        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
        .form-group .sentimentos {
            display: flex;
            gap: 10px;
        }
        .form-group .sentimentos label {
            display: flex;
            align-items: center;
        }
        .form-group .sentimentos input {
            margin-right: 5px;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .button-container a, .button-container button {
            background-color: #8a2be2; 
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
            border: none;
            font-family: Arial, sans-serif; 
            text-align: center;
            box-sizing: border-box; 
        }
        .button-container a:hover, .button-container button:hover {
            background-color: #6a1b9a; 
        }
        .button-container button {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Me conta aí como foi😎</h2>
        <form id="acaoForm" action="verAcoes.php" method="post">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" required></textarea>
            </div>
            <div class="form-group">
                <h3>Você se sentiu:</h3>
                <div class="sentimentos">
                    <label><input type="radio" name="sentimento" value="Feliz" required> Feliz</label>
                    <label><input type="radio" name="sentimento" value="Neutro" required> Neutro</label>
                    <label><input type="radio" name="sentimento" value="Triste" required> Triste</label>
                </div>
            </div>
            <div class="button-container">
                <a href="main.html">Voltar</a>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>
