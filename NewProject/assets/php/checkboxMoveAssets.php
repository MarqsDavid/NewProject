<?php
// Include your database connection file
include('conexao.php');

// Check if form was submitted and 'options' is set
if(isset($_POST['options'])) {
    // Escape each selected option to prevent SQL injection
    foreach($_POST['options'] as $selected) {
        $selected = mysqli_real_escape_string($conexao, $selected);
        $reasons = $_POST['reasons'];
        $dateDischarge = $_POST['dateDischarge'];
        // Example update query, adjust column names and variables as per your database structure
        $query = "UPDATE assets SET dateCreation='$dateDischarge',reasons='$reasons', sstatus = 3 WHERE id = '$selected'";
        mysqli_query($conexao, $query) or die(mysqli_error($conexao)); // Add error handling
    }
    
    // Redirect after processing
    header("Location: ../pages/moveAssets.php");
    exit(); // Make sure to exit after redirection
    
}
?>
