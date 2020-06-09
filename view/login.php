<!Doctype html>
<html>
    <head>
        <?php
            include("../utilitarios/head-crud.php");
        ?>
    </head>
    <body>
        <?php
        //require_once('../controller/database-login.php');
        ?>
        <div class="formularios">

            <form action="../controller/database-login.php"  method="POST">

                <div class="formgroup">
                    <label for="email">Endereço de e-mail:</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="formgroup">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" class="form-control">   
                </div>

                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>


    </div>
        <?php
            require_once('../controller/database-login.php');
            if(validar()->$autent == false){
                echo "dados incorretos";
            }
        ?>

    </body>
</html>