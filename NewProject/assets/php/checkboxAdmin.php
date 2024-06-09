<?php
// Include your database connection file
include('conexao.php');

if(isset($_POST['options'])) {
    foreach($_POST['options'] as $selected) {
        // Perform SQL DELETE operation for each selected user
        $query = "DELETE FROM users WHERE id = $selected";
        mysqli_query($conexao, $query);
    }
    // Redirect back to the page after deletion
    header("Location: ../pages/masterUser.php");
    exit();
}
?>
