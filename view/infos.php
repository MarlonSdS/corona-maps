<?php
    Session_start();
    if(!isset($_SESSION['idUsuario']) or !isset($_SESSION['nome'])){
        header("location: /corona-maps/view/login.php");
        exit;
    }else{
        $id = $_SESSION['idUsuario'];
    }
?>
<!Doctype html>
<html lang="pt-br">

    <head>
        <title>Corona Maps</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../view/styles/bootstrap.css">
        <link rel="stylesheet" href="../view/styles/infos.css">
    </head>
    <body>
        <?php require_once('../controller/back.php'); ?>
        <header>
            <h1> </h1>
                    <!-- Menu -->
            <?php include('../utilitarios/nav.php') ?>

        <main>
            <form action="/corona-maps/controller/back.php" method="POST">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <?php mediarNiveis(); ?>
            <div class="card">
                <p class="label">Como está o nível de isolamento</p>
                <p class="nivel"><?php echo $mediaNiIso; ?></p>
                <?php if(isset($_SESSION['contribuir'])): ?>
                <input type="number" class="form-control" name="cont1" >
                <?php endif; ?>
            </div>
            <div class="card">
                <p class="label">Quão fácil é se isolar</p>
                <p class="nivel"><?php echo $mediaFaIso; ?></p>
                <?php if(isset($_SESSION['contribuir'])): ?>
                <input type="number" class="form-control" name="cont2" >
                <?php endif; ?>
            </div>
            <div class="card">
                <p class="label">Facilidade de solicitar serviços sem sair de casa</p>
                <p class="nivel"><?php echo $mediaSoSer; ?></p>
                <?php if(isset($_SESSION['contribuir'])): ?>
                <input type="number" class="form-control" name="cont3" >
                <?php endif; ?>
            </div>
            <div class="btn-contribuir">
            <?php if(!isset($_SESSION['contribuir'])): ?>
            <a href="../controller/back.php?contribuir=<?php echo "true"; ?> 
            " class="btn btn-info">Quero com minhas informações</a>
            <?php else: ?>
            <button type="submit" class="btn btn-success" 
           name="enviar">Contribuir</button>
            <?php endif; ?>
            </div>
            </form>
            <?php
                mediarNiveis();
                echo $quantidade;
            ?>
            
        </main>

        <footer></footer>
    </body>

</html>