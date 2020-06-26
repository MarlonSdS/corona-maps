<?php
include("../controller/conexao.php");

$contribuir ="false";
$enviar = "false";

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


if(isset($_GET['enviar'])){
    $enviar = $_GET['enviar'];
}


if(isset($_POST['enviar'])){
    $nIsolamento = $_POST['cont1'];
    $fIsolar = $_POST['cont2'];
    $sServicos = $_POST['cont3'];
    $id = $_POST['id'];

    $query = "INSERT INTO ifos(nivelIsolamento, facilIsolar, solicitarServicos, idUsuario) 
    VALUES ('$nIsolamento', '$fIsolar', '$sServicos', '$id')";

    $operacao = mysqli_query($conexao, $query);

    session_start();
    $_SESSION['contribuir'] = null;
    header("location: /corona-maps/view/infos.php");
}
$mediaNiIso = 0;
$mediaFaIso = 0;
$mediaSoSer = 0;
function mediarNiveis(){
    global $conexao, $quantidade;
    global $mediaNiIso, $mediaFaIso, $mediaSoSer;
    
    $arrayNiIso = $conexao->query("SELECT SUM(nivelIsolamento)/COUNT(*) as media FROM ifos");
    $mediaNiIso = $arrayNiIso->fetch_assoc();
    $mediaNiIso = $mediaNiIso['media'];
    $arrayFaIso = $conexao->query("SELECT SUM(facilIsolar)/COUNT(*) as media FROM ifos");
    $mediaFaIso = $arrayFaIso->fetch_assoc();
    $mediaFaIso = $mediaFaIso['media'];
    $arraySoSer = $conexao->query("SELECT SUM(solicitarServicos)/COUNT(*) as media FROM ifos");
    $mediaSoSer = $arraySoSer->fetch_assoc();
    $mediaSoSer = $mediaSoSer['media'];

    /*$quantidade = count($arrayNiIso);
    $somaNiIso = 0;

    for ($i=0; $i < $quantidade; $i++) { 
        $somaNiIso = $somaNiIso + $arrayNiIso[$i];
    }
    $mediaNiIso = $somaNiIso / $quantidade;*/
    //$arrayNiIso = (string) $arrayNiIso;
    


}


?>