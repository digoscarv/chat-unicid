<?php
session_start();

    //rint_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email'])&& !empty($_POST['senha']))
    {
    // permite acesso
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php'); 
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: index.php');
    }

    }
    else
    {
        header('Location: login.php');
    }


?>