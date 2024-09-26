<?php
if (isset($_GET['timezone'])) {
    $timezone = $_GET['timezone'];
    date_default_timezone_set($timezone); // Define o fuso horário com base no valor recebido

    // Gera a hora e a data atuais no fuso horário definido
    $hora = date('H:i:s');
    $data = date('d/m/Y');

    // Retorna os valores em formato JSON
    echo json_encode(['hora' => $hora, 'data' => $data]);
} else {
    // Caso nenhum fuso horário seja enviado, define um padrão
    echo json_encode(['hora' => date('H:i:s'), 'data' => date('d/m/Y')]);
}
?>
