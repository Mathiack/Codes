<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        // Verifica se o cookie de fuso horário está definido
        if (isset($_COOKIE['timezone'])) {
            $timezone = $_COOKIE['timezone'];
        } else {
            $timezone = 'America/Sao_Paulo'; // Fuso horário padrão
        }

        // Define o fuso horário com base no valor do cookie ou no padrão
        date_default_timezone_set($timezone);
        $hora = date('H'); // Captura a hora no fuso horário definido
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if ($hora >= 6 && $hora < 12) {
                $titulo = "Bom dia!";
            } elseif ($hora >= 12 && $hora < 18) {
                $titulo = "Boa tarde!";
            } else {
                $titulo = "Boa noite!";
            }
            echo $titulo;
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Atualiza a hora na página
        function atualizarHora() {
            var agora = new Date();
            var horas = agora.getHours().toString().padStart(2, '0');
            var minutos = agora.getMinutes().toString().padStart(2, '0');
            var segundos = agora.getSeconds().toString().padStart(2, '0');
            document.getElementById('hora').innerText = horas + ':' + minutos + ':' + segundos;
        }
        setInterval(atualizarHora, 1000); // Atualiza a hora a cada segundo

        // Função para salvar o fuso horário em um cookie
        function salvarFusoHorario(fuso) {
            document.cookie = "timezone=" + fuso + "; path=/"; // Define o cookie
        }

        // Função para mudar o fuso horário ao selecionar uma opção
        function mudarFusoHorario(fuso) {
            salvarFusoHorario(fuso); // Salva o fuso no cookie

            // Faz requisição para obter a hora no novo fuso horário
            fetch('update_timezone.php?timezone=' + fuso)
            .then(response => response.json())
            .then(data => {
                document.getElementById('hora').innerText = data.hora; // Atualiza a hora
                document.getElementById('data').innerText = data.data; // Atualiza a data
            })
            .catch(error => console.error('Erro ao atualizar fuso horário:', error));
        }

        // Carrega o fuso horário do cookie ao carregar a página
        window.onload = function() {
            const fusoSalvo = getCookie('timezone');
            if (fusoSalvo) {
                document.getElementById('timezone').value = fusoSalvo; // Define a opção selecionada
                mudarFusoHorario(fusoSalvo); // Atualiza a hora de acordo com o fuso
            }
        };

        // Função para obter o valor de um cookie
        function getCookie(name) {
            let matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([.$?*|{}()[]\\\/+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }

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
                echo date('H:i:s'); // Exibindo a hora inicial no fuso horário definido
            ?>
        </p>
    </div>
    <div id="data">
        <p>
            <?php
                echo date('d/m/Y'); // Exibindo a data
            ?>
        </p>
    </div>
    <div id="fuso">
        <select id="timezone" name="timezone" onchange="mudarFusoHorario(this.value)">
            <option value="America/Sao_Paulo">América do Sul/Brasília</option>
            <option value="America/Rio_Branco">América do Sul/Acre</option>
            <option value="America/Noronha">América do Sul/Fernando de Noronha</option>
            <option value="America/Manaus">América do Sul/Amazonas</option>
        </select>
    </div>
</body>
</html>
