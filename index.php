<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

echo "Versao Atual do PHP: " . phpversion() . "<br><br>";

$link = new mysqli("db", "root", "senha", "meubanco");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

echo "Conexão com o MySQL realizada com sucesso!<br>";
echo "Projeto Toshiro Shibakita - Infraestrutura via Docker Compose.";

$link->close();
?>