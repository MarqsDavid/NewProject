<?php
session_start();


include_once('conexao.php');

if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['passwordAdmin']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['passwordAdmin']);
    header('Location: ../login.php');
}
$logged = $_SESSION['username'];
$sql = "SELECT * FROM  users ORDER BY  id DESC";

$result = $conexao->query($sql);
