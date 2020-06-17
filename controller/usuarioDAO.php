<?php

    include("../controller/conexao.php");

    //cadastrar usuário no banco
    if(isset($_POST['cadastro'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
    
        $query = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
        $operacao = mysqli_query($conexao, $query);
        header("location: /corona-maps/view/login.php");
    }

    //autenticar usuário
    if(isset($_POST['entrar'])){
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $validar = $conexao->query("SELECT * FROM usuario WHERE email='$email' AND senha='$senha'")
         or die($conexao->error);

        if($validar->num_rows > 0 ){
            $validar = $validar->fetch_array();
            session_start();
            $_SESSION['idUsuario'] = $validar['idUsuario'];
            $_SESSION['nome'] = $validar['nome'];
            header("location: /corona-maps/view/infos.php");
        }else{
            header("location: /corona-maps/view/login.php");
        }
    }

    

?>