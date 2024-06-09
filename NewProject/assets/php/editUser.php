<?php
include_once('conexao.php');

// Check if the form was submitted
if (isset($_POST['update'])) {
    // Check if all fields are set and not empty
    if (validateFields($_POST)) {
        // Get form data
        $id = $_POST['id-user'];
        $alterName = $_POST['alterName'];
        $alterLastName = $_POST['alterLastName'];
        $alterEmail = $_POST['alterEmail'];
        $alterPasswordUsers = $_POST['alterPasswordUsers'];
        $alterPhone = $_POST['alterPhone'];

        // Prepare SQL statement using prepared statements to prevent SQL Injection
        $sqlUpdate = $conexao->prepare("UPDATE users SET nameUser=?, lastName=?, email=?, phone=?, passwordUsers=? WHERE id=?");

        // Check if statement preparation was successful
        if ($sqlUpdate) {
            // Bind parameters to the statement
            $sqlUpdate->bind_param("sssssi", $alterName, $alterLastName, $alterEmail, $alterPhone, $alterPasswordUsers, $id);

            // Execute the statement
            if ($sqlUpdate->execute()) {
                echo "Record updated successfully.";
            } else {
                echo "Error updating record: " . $conexao->error;
            }

            // Close the statement
            $sqlUpdate->close();
        } else {
            echo "Error preparing statement: " . $conexao->error;
        }
    } else {
        echo "All fields are required.";
    }
}

// Redirect to the profile page after form processing
header('Location: ../pages/profile.php');
exit;

// Function to validate if form fields are set and not empty
function validateFields($formData) {
    $requiredFields = ['id-user', 'alterName', 'alterLastName', 'alterEmail', 'alterPasswordUsers', 'alterPhone'];
    foreach ($requiredFields as $field) {
        if (!isset($formData[$field]) || empty($formData[$field])) {
            return false;
        }
    }
    return true;
}
?>
