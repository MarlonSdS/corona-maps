<!Doctype html>
<html>
    <head>
        <?php
            include("../utilitarios/head-crud.php");
        ?>
    </head>
    <body>
        <?php
        require_once('../controller/database-login.php');
        ?>
        <session class="lateral-esquerda"><h1> Entre para poder contrbuir </h1></session>
        <div clas="lateral-direita">
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

                <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
                <a href="cadastrar.php" class="btn btn-success">Cadastrar</a>
            </form>
            

        </div>
        </div>
    
        <?php
           if($autent == false){
               echo "dados incorretos";
           }
        ?>

    </body>
</html>