<?php
session_start();

// Check if the form was submitted and if the username and password fields are not empty
if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['passwordAdmin']))
{
    include_once('conexao.php');
    
    $username = $_POST['username'];
    $passwordAdmin = $_POST['passwordAdmin'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conexao->prepare("SELECT * FROM masteruser WHERE username = ? and passwordAdmin = ?");
    $stmt->bind_param("ss", $username, $passwordAdmin);
    $stmt->execute();
    $result = $stmt->get_result();

    // If no user found, redirect back to the login page
    if($result->num_rows < 1)
    {
        header('Location: ../login.php');
        exit();
    }
    else
    {
        // If authentication successful, set session variables and redirect to the user's page
        $_SESSION['username'] = $username;
        $_SESSION['passwordAdmin'] = $passwordAdmin;
        header('Location: ../pages/masterUser.php');
        exit();
    }
}
else
{
    // If the form was not submitted correctly, redirect to the login page
    header('Location: ../login.php');
    exit();
}
?>
