<?php
//acesso ao servidor
    $servidor = "localhost";
    $banco = "corona";
    $usuario = "root";
    $password = "";
    
    $conexao = mysqli_connect($servidor, $usuario, $password, $banco)or  die("Conexão falhou!". mysqli_connect_error);
?>    