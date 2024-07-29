<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $valor = $_GET['valor'];
    $conv = $valor *  5.18;
    
    echo "O valor em Dólares Americanos (25/04/2024) é: $" . $conv;
    ?>
</body>
</html>