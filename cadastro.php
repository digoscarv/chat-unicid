<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confSenha'];

        $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,email,senha,confSenha) 
        VALUES ('$nome','$email','$senha','$confSenha')");

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>

   
    <div class="caixa">
        
        <img src="img/Slide2.png" alt="">
         
        <form action="cadastro.php" method = "POST">
            <fieldset>
            
                <legend><b><h1>Cadastro</h1></legend></b>

                <div class="nome">
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo">
                    <br>
                </div>

                <div class="email">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                    <br>
                </div>

                <div class="senha">
                    <input type="password" name="senha" id="senha" placeholder="Senha">
                    <br>
                </div>

                <div class="confSenha">
                    <input type="password" name="confSenha" id="confSenha" placeholder="Confirmar Senha">
                    <br><br>
                </div>

                <div class="entrar">
                    <input type="submit" name="submit" id="submit" value="Entrar">
                </div>

                <div>
                    <p>Já tem cadastro? <a href="login.php">Clique aqui!</a></p>
                </div>
            </fieldset>
        </form>
    </div>
    
    
</body>
</html>
