<?php
include_once('conexao.php');

if (isset($_POST['update'])) {
    $id = $_POST['id-user'];
    $alterName = $_POST['alterName'];
    $alterLastName = $_POST['alterLastName'];
    $alterEmail = $_POST['alterEmail'];
    $alterPasswordUsers = $_POST['alterPasswordUsers'];
    $alterPhone = $_POST['alterPhone'];

    // Check if all fields are filled
    if (!empty($id) && !empty($alterName) && !empty($alterLastName) && !empty($alterPasswordUsers) && !empty($alterPhone)) {
        // Construct the update query
        $sqlUpdate = "UPDATE users SET nameUser='$alterName',lastName='$alterLastName',email='$alterEmail',phone='$alterPhone',passwordUsers='$alterPasswordUsers' WHERE id=$id";
        
        // Execute the update query
        if ($conexao->query($sqlUpdate) === TRUE) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $conexao->error;
        }
    } else {
        echo "All fields are required.";
    }
}

// Redirect back to the originating page after form processing
header('Location: ../pages/masterUser.php');
exit;
