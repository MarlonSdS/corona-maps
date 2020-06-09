<?php

    //acesso ao servidor
    $servidor = "localhost";
    $banco = "corona";
    $usuario = "root";
    $password = "";
    
    $conexao = mysqli_connect($servidor, $usuario, $password, $banco)or  die("Conexão falhou!". mysqli_connect_error);

    //salvar dados no banco
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $query = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    $operacao = mysqli_query($conexao, $query);

    if($operacao){
        $success = true;
    }else{
        $success = false;
    }

?>