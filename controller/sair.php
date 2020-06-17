<?php
    session_start();
    $_SESSION['idUsuario'];
    $_SESSION['nome'];
    session_destroy();
    header("location: /corona-maps/view/login.php");

?>