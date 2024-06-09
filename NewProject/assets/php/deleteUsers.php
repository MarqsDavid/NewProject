<?php

include_once('conexao.php');
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sqlInsert = "DELETE FROM users WHERE id=$id";

    $result = $conexao->query($sqlInsert);
    print_r($result);
}
header('Location: ../pages/masterUser.php');
