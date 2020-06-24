<?php
$contribuir = $_GET['contribuir'];

if($contribuir == "true"){
    session_start();
    $_SESSION['contribuir'] ="";
    header("location: /corona-maps/view/infos.php");
}
?>