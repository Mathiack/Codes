<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $n1 = $_GET['n1'];
    $ant = $n1 - 1;
    $suc = $n1 + 1;
    
    echo "O número que você escolheu é: ". $n1 . "<br>";
    echo "O antecessor dele é: " . $ant . "<br>";
    echo "O sucessor dele é: " . $suc . "<br>";
    ?>
</body>
</html>