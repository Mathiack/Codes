<?php
// Conectar ao banco de dados
$host = "localhost";
$user = "root"; // Usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "contador"; // Nome do banco de dados

$conn = new mysqli($host, $user, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Selecionar o número atual de visitas
$sql = "SELECT visitas FROM visitas WHERE id = 1";
$result = $conn->query($sql);

// Verificar se o contador já existe
if ($result->num_rows > 0) {
    // Incrementar o número de visitas
    $row = $result->fetch_assoc();
    $visitas_atual = $row['visitas'] + 1;

    // Atualizar o número de visitas no banco de dados
    $sql = "UPDATE visitas SET visitas = $visitas_atual WHERE id = 1";
    $conn->query($sql);
} else {
    // Caso não exista um contador, cria um com 1 visita inicial
    $visitas_atual = 1;
    $sql = "INSERT INTO visitas (visitas) VALUES ($visitas_atual)";
    $conn->query($sql);
}

// Fechar a conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p id="p1">
        Esta página foi visitada 
    </p>
    <p id="contador">
        <?php echo $visitas_atual; ?>
    </p>
    <p id="p2">
        vezes.
    </p>
</body>
</html>
