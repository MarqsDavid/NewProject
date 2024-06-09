<?php
session_start();

include_once('conexao.php');

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['emailPassword']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['emailPassword']);
    header('Location: ../login.php');
}

$id = $_SESSION['id'];
$nameUser = $_SESSION['nameUser'];
$lastName = $_SESSION['lastName'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];
