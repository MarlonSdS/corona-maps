<?php

    //acesso ao servidor
    $servidor = "localhost";
    $banco = "corona";
     $usuario = "root";
    $password = "";
        
    $conexao = mysqli_connect($servidor, $usuario, $password, $banco)or  die("Conexão falhou!". mysqli_connect_error);

    //

    //pegando os dados informados pelo usuário e os dados do banco
    if(isset($_POST['entrar'])){
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        header('location: ../view/login.php');
        validar();
    }


    //

    $autent = true;

    function validar(){
        global $conexao;
        global $email;
        global $senha;
        global $autent;

        $validar = $conexao->query("SELECT senha FROM usuario WHERE email = '$email'") or die($conexao->error);

        while($row = $validar->fetch_assoc()){
            if($row['senha'] == $senha){
                $autent = true;
                header('location: ../view/infos.php');
                echo "aaa";
            }else{
                $autent = false;
               
            }
            
        }
    }

    
    

?>