<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora em Tempo Real</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function atualizarHora() {
            var agora = new Date();
            var horas = agora.getHours().padStart(2, 0);
            var minutos = agora.getMinutes().toString().padStart(2, '0');
            var segundos = agora.getSeconds().toString().padStart(2, '0');
            document.getElementById('hora').innerText = horas + ':' + minutos + ':' + segundos;
        }

        setInterval(atualizarHora, 1000);

        var titulo = "";

        if (hora >= 6 && hora < 12) {
            titulo = "Bom dia!";
        } else if (hora >= 12 && hora < 18) {
            titulo = "Boa tarde!";
        } else {
            titulo = "Boa noite!";
        }

        document.title = titulo;
        document.getElementById("titulo").innerText = titulo;
    </script>
</head>
<body>
    <div id="hora" onload="atualizarHora()">
        <p>
            <?php
                date_default_timezone_set('America/Sao_Paulo');
                echo date('H:i:s');
            ?>
        </p>
    </div>
    <div id="data" >
        <p>
            <?php
                $data = date('d/m/Y');
                echo $data;
            ?>
        </p>
    </div> 
</body>
</html>
