<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Ações</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9f5e9;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        .table-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 800px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 800px;
            margin-bottom: 20px;
        }
        .button-container a {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .button-container a:hover {
            background-color: #45a049;
        }
        .action-links {
            display: flex;
            gap: 10px;
        }
        .action-links a, .action-links button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .action-links a:hover, .action-links button:hover {
            background-color: #45a049;
        }
        .action-links button {
            background: none;
            color: #e53935; 
            cursor: pointer;
        }
        .action-links button:hover {
            color: #b71c1c; 
        }
    </style>
</head>
<body>
    <div class="table-container">
        <div class="button-container">
            <a href="main.html">Voltar</a>
            <a href="adicionarAcao.php">Adicionar Ação</a>
        </div>
        <h2>Ações Adicionadas</h2>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Sentimento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Prova</td>
                    <td>Ajudei meus amigos a estudar para a prova.</td>
                    <td>Neutro</td>
                    <td class="action-links">
                        <a href="Editar/editar1.php">Editar</a>
                        <form action="Excluir/excluir1.php" method="post" style="display:inline;">
                            <input type="hidden" name="index" value="0">
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td>Academia</td>
                    <td>Bati meu recorde de peso no supino.</td>
                    <td>Feliz</td>
                    <td class="action-links">
                        <a href="Editar/editar2.php">Editar</a>
                        <form action="Excluir/excluir1.php" method="post" style="display:inline;">
                            <input type="hidden" name="index" value="1">
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td>Aula</td>
                    <td>Faz 1 semana que estou estudando todos os dias.</td>
                    <td>Feliz</td>
                    <td class="action-links">
                        <a href="Editar/editar3.php">Editar</a>
                        <form action="Excluir/excluir1.php" method="post" style="display:inline;">
                            <input type="hidden" name="index" value="1">
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
