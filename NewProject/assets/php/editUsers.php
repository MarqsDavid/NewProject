<?php
$host = "localhost";
$username = "root";
$database = "dmega";

$conn = mysqli_connect($host, $username, "", $database);



if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

$id = $_POST['id'];
$alterName = $_POST['alterName'];
$alterLastName = $_POST['alterLastName'];
$alterEmail = $_POST['alterEmail'];
$alterPasswordUsers = $_POST['alterPasswordUsers'];
$alterPhone = $_POST['alterPhone'];

$sql = "UPDATE users SET nameUser='$alterName',  email='$alterLastName', lastName='$alterEmail', passwordUsers='$alterPasswordUsers', phone='$alterPhone'  WHERE id=$id";

if (mysqli_query($conn, $sql)) {
	header("Location: ../pages/masterUser.php");
} else {
    echo "Erro na atualização do registro: " . mysqli_error($conn);
}

mysqli_close($conn);
