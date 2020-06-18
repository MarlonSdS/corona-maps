<?php

    include("../controller/conexao.php");

    $listarUsuarios;

    $id ="";
    $nome ="";
    $email ="";
    $senha ="";

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
            if($email == "admin@admin"){
                header("location: /corona-maps/view/admin.php");
            }else{
                header("location: /corona-maps/view/infos.php");
            }
            
        }else{
            header("location: /corona-maps/view/login.php");
        }
    }

    function listarUsuarios(){
        global $conexao, $listarUsuarios;

        $listarUsuarios = $conexao->query("SELECT * FROM usuario") or die ($conexao->error);
    }

    if(isset($_GET['excluir'])){
        $id = $_GET['excluir'];
    
        $conexao->query("DELETE FROM usuario WHERE idUsuario='$id'") or die ($conexao->error);
    
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['mensagem'] = "Usuário excluído com sucesso!";
        $_SESSION['tipo_msg'] = "danger";
    
        header("location: ../view/admin.php");
    }
    
    if(isset($_GET['consultar'])){
        $id = $_GET['consultar'];
    
        $usuario = $conexao->query("SELECT * FROM usuario WHERE idUsuario='$id'") or die ($conexao->error);
    
        if($usuario->num_rows == 1){
            $usuario = $usuario->fetch_array();
            $id = $usuario['idUsuario'];
            $nome = $usuario['nome'];
            $email = $usuario['email'];
            $senha = $usuario['senha'];
        }
    }

    

?>