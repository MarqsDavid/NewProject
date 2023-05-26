<?php
// Estabelecer a conexão com o banco de dados
$conn = new PDO("sqlsrv:server=DESKTOP-NELQOT9;database=DMEGA", "david", "123");

//$conn = new PDO("sqlsrv:Server=$server;Database=$database", $username, $password);

// Recuperar os valores do formulário de login
$email = $_POST['email'];
$emailPassword = $_POST['emailPassword'];

// Consultar o banco de dados para verificar as credenciais
$query = "SELECT * FROM UsersA WHERE email = :email AND emailPassword = :emailPassword";
$stmt = $conn->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':emailPassword', $emailPassword);
$stmt->execute();

// Verificar se o login foi bem-sucedido
if ($stmt->rowCount() > 0) {
  // Login válido, redirecionar o usuário para a página principal
  header("Location: ");
} else {
  // Login inválido, redirecionar o usuário de volta para a página de login
  header("Location: ");
}
