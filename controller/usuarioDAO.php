<?php

    include("../controller/conexao.php");

    //cadastrar usuário no banco
    if(isset($_POST['cadastro'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
    
        $query = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
        $operacao = mysqli_query($conexao, $query);
    }

    //autenticar usuário
    if(isset($_POST['entrar'])){
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $validar = $conexao->query("SELECT senha FROM usuario WHERE email = '$email'") or die($conexao->error);

        while($row = $validar->fetch_assoc()){
            if($row['senha'] == $senha){
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('location: ../view/infos.php');
            }else{
                header('location: ../view/login.php');
               
            }
            
        }
    }

    

?>