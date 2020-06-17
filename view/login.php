<!Doctype html>
<html>
    <head>
        <?php
            include("../utilitarios/head-crud.php");
        ?>
    </head>
    <body>
        <?php
        require_once('../controller/usuarioDAO.php');
        ?>
        <session class="lateral-esquerda"><h1> Entre para poder contrbuir </h1></session>
        <div clas="lateral-direita">
            <div class="formularios">

            <form action="../controller/usuarioDAO.php"  method="POST">

                <div class="formgroup">
                    <label for="email">Endereço de e-mail:</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="formgroup">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" class="form-control">   
                </div>

                <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
                <a href="cadastrar.php" class="btn btn-success">Cadastrar</a>
            </form>
            

        </div>
        </div>

    </body>
</html>