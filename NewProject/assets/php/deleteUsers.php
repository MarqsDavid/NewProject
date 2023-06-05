<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dmega";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Não foi possível conectar ao banco de dados: " . $conn->connect_error);
}

// Verificar se foi enviado um ID para excluir
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário excluído com sucesso!";
    } else {
        echo "Erro ao excluir o usuário: " . $conn->error;
    }
}

// Fechar conexão com o banco de dados
$conn->close();
?>
