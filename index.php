<?php

    session_start();
    //print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else
    {
        $logado = $_SESSION['email'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CHAT | HEXÁGONO</title>
    <script class = "chat" type="text/javascript">
        function ajax(){
        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
            if (req.readyState == 4 && req.status == 200){
                document.getElementById('chat').innerHTML = req.responseText;
            }
        }
        req.open('GET','chat.php',true);
        req.send();
    }

    setInterval(function(){ajax();},1000);
    </script>
   
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="img/Slide2.png" alt=""> 
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CHAT | HEXÁGONO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>


    <div class = "chat" id="chat">

    </div>

    <form method = "post" action="index.php">
                <div class = "nome">
                    <input type="text" name = "nome" placeholder = "Nome">
                </div>
                <div class = "mensagem">
                    <input type="text" name = "mensagem" placeholder = "Mensagem">
                </div>
                <div class = "enviar">
                    <input type="submit" name="enviar" value = "Enviar">
                </div>
            </form>


    <?php

    include ("bd_connect.php");
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];
    $pdo->query("INSERT INTO mensagens SET nome = '$nome', mensagem = '$mensagem'");



    ?>

</body>
</html>