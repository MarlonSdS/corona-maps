<!Doctype html>
<html>
    <head>
        <?php
            include("../utilitarios/head-crud.php");
        ?>
    </head>
    <body>
    <session class="lateral-esquerda"><h1> Cadastre-se para poder contribuir </h1></session>
        <div class="formularios">

            <h2>Preencha os seus dados</h2>
            <form action="../controller/database-cadastro.php"  method="POST">
                <div class="formgroup">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="formgroup">
                    <label for="email">Endereço de e-mail:</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="formgroup">
                    <label for="senha">Defina uma senha:</label>
                    <input type="password" name="senha" class="form-control">   
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            

        </div>
    </body>
</html>