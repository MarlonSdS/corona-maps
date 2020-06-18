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
    <?php require_once('../controller/usuarioDAO.php'); ?>
        <div class="container">
            <form action="corona-maps/controller/usuarioDAO.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="formgroup">
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>">
                </div>
                <div class="formgroup">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                </div>
                <div class="formgroup">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control" value="<?php echo $senha; ?>">
                </div>

                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>
        <?php
        listarUsuarios();
        ?>
        <div class="crud">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($row = $listarUsuarios->fetch_assoc()) :
            ?>
                <tr>
                    <td><?php echo $row['idUsuario']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['senha'] ?></td>
                    <td>
                        <a href="admin.php?consultar=<?php echo $row['idUsuario']; ?>" class="btn btn-info">Editar</a>
                        <a href="../controller/usuarioDAO.php?excluir=<?php echo $row['idUsuario']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php
                endwhile;
            ?>
            </tbody>
                
            </table>
        </div>
    </body>
</html>