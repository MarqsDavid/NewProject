<?php
// Include your database connection file
include('conexao.php');

if(isset($_POST['options'])) {
    foreach($_POST['options'] as $selected) {
        $selected = mysqli_real_escape_string($conexao, $selected);
        $query = "UPDATE assets SET dateCreation='$dateDischarge',reasons='$reasons',sstatus=3 WHERE id = '$selected'";
        mysqli_query($conexao, $query);
    }
    
    header("Location: ../pages/moveAssets.php");
    exit();
}
?>
