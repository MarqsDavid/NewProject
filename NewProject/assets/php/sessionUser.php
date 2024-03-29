<?php
    session_start();
    
    include_once('conexao.php');

    if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['emailPassword']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['emailPassword']);
        header('Location: ../login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM assets WHERE id LIKE '%$data%' or ddescription LIKE '%$data%' or assetNumber LIKE '%$data%'or numberLocation LIKE '%$data%' or responsible LIKE '%$data%' or dateCreation LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql= "SELECT * FROM  assets ORDER BY  id DESC";
    }

    $result = $conexao->query($sql);
?>