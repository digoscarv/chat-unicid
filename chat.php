<?php
include("bd_connect.php");

$sql = $pdo->query("SELECT * FROM mensagens");

foreach ($sql-> fetchAll() as $key) {

    echo"<h3>".$key['nome']."</h3>";
    echo"<p>".$key['mensagem']."</p>";

}



?>
