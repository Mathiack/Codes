<?php 
    $r = abs(-200); //abs mostra o valor absoluto, sem o sinal de negativo
    echo 'O valor é -200, e seu valor absoluto é: ' . $r . "<br>";

    $bs = base_convert(254, 10, 8); //converte bases 
    $bsc = base_convert(254, 10, 2);
    echo "O valor 254, em base 10, convertido para a base 8 é: " . $bs . ". Já em base 2, é: " . $bsc . "<br>";

    //Outras funções: ceil(), floor(), round();
    //hypot() server para calcular a hipotenusa, basta informar os catetos.

    $ind = intdiv(5, 2); //divisão inteira, tipo 5 / 2 = 2, não sendo 2,5
    echo "A divisão inteira de 5 por 2 é: " . $ind . "<br>";

    $min = min(5, 2); //retorna o valor mínimo entre os parâmetros dados
    echo 'Entre 5 e 2 o valor mínimo é: ' . $min . "<br>";
    $max = max(5, 2); //retorna o valor máximo entre os parâmetros dados
    echo 'Entre 5 e 2 o valor mínimo é: ' . $max . "<br>";

    $pi = pi(); //outra forma é mostrar usando o M_PI
    echo 'O valor de pi é: ' . $pi . "<br>";

    //funções trigonométricas : sin() , cos() , tan()

    $raq = sqrt(81); //da pra mudar o radical botando em fração, tipo 27 ** (1/3) = raiz cúbica de 27 , 16 ** (1/4) = raiz quarta de 16 , etc
    echo 'A raiz quadrada de 81 é: ' . $raq . "<br>";
?>