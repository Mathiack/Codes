<?php
    include "index.html";

    //definindo as variáveis
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    //fazer o calculo

    $imc = $peso / ($altura * $altura);
    $IMC;

    echo 'O seu IMC é: ' + $imc;
?>