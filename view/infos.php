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
        <header>
            <h1> </h1>
                    <!-- Menu -->
            <div class="Menu">
                <input type="checkbox" id="chec">
                <label for="chec">
                    <img src="imagens/menu.png">
                </label>

                <nav>
                    <ul>
                        <li><b><a href="../index.html">Inicio</a></b></li>
                        <li><b><a href="infos.php">Regional</a></b></li>
                        <li><b><a href="login.php">Entrar</a></b></li>
                        <li><b><a href="../controller/sair.php">Sair</a></b></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <form action="/corona-maps/controller/back.php" method="POST">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="card">
                <p class="label">Como está o nível de isolamento</p>
                <p class="nivel"></p>
                <?php if(isset($_SESSION['contribuir'])): ?>
                <input type="text" class="form-control" name="cont1">
                <a href="" class="btn btn-success">Contribuir</a>
                <?php else: ?>
                <a href=""></a>
                <?php endif; ?>
            </div>
            <div class="card">
                <p class="label">Quão fácil é se isolar</p>
                <p class="nivel"></p>
                <?php if(isset($_SESSION['contribuir'])): ?>
                <input type="text" class="form-control" name="cont2">
                <a href="" class="btn btn-success">Contribuir</a>
                <?php else: ?>
                <a href=""></a>
                <?php endif; ?>
            </div>
            <div class="card">
                <p class="label">Facilidade de solicitar serviços sem sair de casa</p>
                <p class="nivel"></p>
                <?php if(isset($_SESSION['contribuir'])): ?>
                <input type="text" class="form-control" name="cont3">
                <a href="" class="btn btn-success">Contribuir</a>
                <?php else: ?>
                <a href=""></a>
                <?php endif; ?>
            </div>
            <div class="btn-contribuir">
            <?php if(!isset($_SESSION['contribuir'])): ?>
            <a href="../controller/back.php?contribuir=<?php echo "true"; ?> 
            " class="btn btn-info">Quero com minhas informações</a>
            <?php else: ?>
            <button type="submit" class="btn btn-success">Contribuir</button>
            <?php endif; ?>
            </div>
            </form>
            
            
        </main>

        <footer></footer>
    </body>

</html>