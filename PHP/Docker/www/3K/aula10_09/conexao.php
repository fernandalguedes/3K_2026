<?php    
   // $host = "localhost";
    $host= "host.docker.internal";
    $usuario = "root";
    $senha = "root";
    $banco = "sistema_login";
    $conn = new mysqli($host, $usuario, $senha, $banco);
    if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
    }
?>