<?php
    Session_start();
    if(!isset($_SESSION['idUsuario']) or !isset($_SESSION['nome'])){
        header("location: /corona-maps/view/login.php");
        exit;
    }
?>
<!doctype html>
<html>
    <head>
        <title>Corona Maps</title>
        <meta charset=utf-8>
        <link rel="stylesheet" href="styles/bootstrap.css">
        <link rel="stylesheet" href="styles/crud.css">
    </head>
    <body>
        <div class="container">
            <form action="/corona-maps/controller/usuarioDAO" method="POST">
                <div clas="formgroup">
                    <label for="login">Login</label>
                    <input type="text" name="login">
                </div>
                <div class="formgroup">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha">
                </div>

                <button type="submit" name="acessar" class="btn btn-warning">Acessar</button>
            </form>
        </div>
    </body>
</html>