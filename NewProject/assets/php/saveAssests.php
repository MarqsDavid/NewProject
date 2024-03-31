<?php
include_once('conexao.php');

if (isset($_POST['update'])) {
    $id = $_POST['item_id'];
    $locationChange = $_POST['location-change'];
    $responsibleChange = $_POST['responsible-change'];
    $dateChange = $_POST['date-change'];

    // Check if the fields are not empty
    if (!empty($id) && !empty($locationChange) && !empty($responsibleChange) && !empty($dateChange)) {
        // Prepare the SQL query for updating
        $sqlUpdate = "UPDATE assets SET numberLocation='$locationChange', responsible='$responsibleChange', dateCreation='$dateChange', sstatus = 2 WHERE id=$id";

        // Execute the SQL query
        if ($conexao->query($sqlUpdate) === TRUE) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $conexao->error;
        }
    } else {
        echo "All fields are required.";
    }
}

// Redirect to the destination page after the update
header('Location: ../pages/moveAssets.php');
exit;
