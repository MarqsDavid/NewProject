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

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM users WHERE (id LIKE '%$data%' 
                OR id LIKE '%$data%' 
                OR nameUser LIKE '%$data%'
                OR lastName LIKE '%$data%' 
                OR email LIKE '%$data%' 
                OR dateOfCiation LIKE '%$data%') 
                ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM users  ORDER BY id DESC";
}

$result = $conexao->query($sql);
