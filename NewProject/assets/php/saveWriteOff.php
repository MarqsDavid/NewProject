<?php
// isset -> serve para saber se uma variável está definida
include_once('conexao.php');
if (isset($_POST['update'])) {
    $id = $_POST['writeOff_id'];
    $reasons = $_POST['reasons'];
    $dateDischarge = $_POST['dateDischarge'];


    $sqlInsert = "UPDATE assets SET dateCreation='$dateDischarge',reasons='$reasons',sstatus=3 WHERE id=$id";

    $result = $conexao->query($sqlInsert);
    print_r($result);
}
header('Location: ../pages/moveAssets.php');
