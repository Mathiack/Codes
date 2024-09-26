<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        $hora = date('H');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if ($hora >= 6 && $hora < 12) {
                $titulo = "Bom dia!";
            } else if ($hora >= 12 && $hora < 18) {
                $titulo = "Boa tarde!";
            } else {
                $titulo = "Boa noite!";
            }
            echo $titulo;
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
    <script>
        function atualizarHora() { //setta a hora e mostra 
            var agora = new Date();
            var horas = agora.getHours().toString().padStart(2, '0');
            var minutos = agora.getMinutes().toString().padStart(2, '0');
            var segundos = agora.getSeconds().toString().padStart(2, '0');
            document.getElementById('hora').innerText = horas + ':' + minutos + ':' + segundos;
        }
        setInterval(atualizarHora, 1000); // atualiza a hora a cada segundo
        function getRandomColor() { // gerador de cores em hexadecimal
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        document.addEventListener('keydown', function(event) { // faz o espaço mudar as background
            if (event.code === 'Space') {  
                const randomColor = getRandomColor();
                document.body.style.backgroundColor = randomColor;
            }
        });
    </script>
</head>
<body>
    <div id="hora">
        <p>
            <?php
                echo date('H:i:s'); // printa a hora
            ?>
        </p>
    </div>
    <div id="data">
        <p>
            <?php
                $data = date('d/m/Y');
                echo $data; // printa a data
            ?>
        </p>
    </div>
</body>
</html>
