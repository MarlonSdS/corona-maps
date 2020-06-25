<?php
include("../controller/conexao.php");

$contribuir ="";

$nIsolamento="";
$fIsolar="";
$sServicos="";
$id="";

if(isset($_GET['contribuir'])){
    $contribuir = $_GET['contribuir'];
}


if($contribuir == "true"){
    session_start();
    $_SESSION['contribuir'] ="";
    header("location: /corona-maps/view/infos.php");
}

$nIsolamento = $_POST['cont1'];
$fIsolar = $_POST['cont2'];
$sServicos = $_POST['cont3'];
$id = $_POST['id'];

if($nIsolamento or $fIsolar or $sServicos != ""){
    $query = "INSERT INTO ifos(nivelIsolamento, facilIsolar, solicitarServicos, idUsuario) 
    VALUES ('$nIsolamento', '$fIsolar', '$sServicos', '$id')";

    $operacao = mysqli_query($conexao, $query);

    session_start();
    $_SESSION['contribuir'] = null;
    header("location: /corona-maps/view/infos.php");
}


?>