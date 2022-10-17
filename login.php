<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>

   
    <div class="caixa">
        
        <img src="img/Slide2.png" alt="">
        <form action="testeLogin.php" method = "POST">
            <fieldset>
            
                <legend><b><h1>Login</h1></legend></b>

                <div class="email">
                    <input type="email" name='email' id='email' placeholder="E-mail">
                    <br>
                </div>

                <div class="senha">
                    <input type="password" name='senha' id ='senha' placeholder="Senha">
                    <br><br>
                </div>

                <div class="entrar">
                    <input type="submit" name='submit' id='submit' value="Entrar">
                </div>

                <div>
                    <p>Não tem cadastro? <a href="cadastro.php">Clique aqui!</a></p>
                </div>
            </fieldset>
        </form>
    </div>
    
    
</body>
</html>