<?php

    //acesso ao servidor
    $servidor = "localhost";
    $banco = "corona";
     $usuario = "root";
    $password = "";
        
    $conexao = mysqli_connect($servidor, $usuario, $password, $banco)or  die("Conexão falhou!". mysqli_connect_errno);

    //pegando os dados informados pelo usuário e os dados do banco
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $query = "SELECT senha FROM usuario WHERE email = $email";
    $operacao = mysqli_query($conexao, $query);
    $linha = mysqli_fetch_assoc($operacao);
    $total = mysqli_num_rows($operacao);

    //validando o usuário
    $senhaDB = "";
    if($total > 0) {
        do {
            $senhaDB = $linha['senha'];
        }while($linha = mysqli_fetch_assoc($operacao));
    }

    if($senhaDB == $senha){
        echo "sucesso";
    }else{
        echo "falha";
    }

?>