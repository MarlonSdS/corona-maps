<?php
    Session_start();
    if(!isset($_SESSION['idUsuario']) or !isset($_SESSION['nome'])){
        header("location: /corona-maps/view/login.php");
        exit;
    }
?>

<!Doctype html>
<html>
    <head>
        <title>Corona-maps</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/bootstrap.css">
        <link rel="stylesheet" href="styles/admin.css">
    </head>
    <body>
        <div class="container">
            <form action="corona-maps/controller/usuarioDAO.php" method="POST">
                <div class="formgroup">
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="formgroup">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="formgroup">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>

        <div class="crud">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                </tr>
            </thead>
                
            </table>
        </div>
    </body>
</html>