<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #480001;
        }
        .telaLogin {
            background-color: rgba(0, 0, 0, 0.95);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            border-radius: 15px;
            color: white;
            text-align: center;
        }
        .h1Text h1{
            transform: translate(0%, -50%);
            font-size: 42px;
            text-align: center;
            color: white;
        }
        .inputBox{
            margin-bottom: 15px;
            transform: translate(-7%, -20%);
        }
        .inputBox input{
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            border: none;
            outline: none;
            width: 100%;
            top: 50%;
            
        }
        #submit{
            background-color: orange;
            border: none;
            padding: 15px;
            width: 116%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            transform: translate(-6%, -20%);
        }
        #submit:hover{
            background-color: orangered;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="testeL.php" method="post">
        <div class="telaLogin">    
            <div class="h1Text">    
                <h1>Login</h1>
            </div>
            <div class="inputBox">
                <input type="text" placeholder="E-mail" name="nome" required>
            </div>
            <div class="inputBox">
                <input type="password" placeholder="Senha" name="senha" required>
            </div>
            <input type="submit" name="submit" value="enviar">
        </div>
    </form>
</body>
</html>