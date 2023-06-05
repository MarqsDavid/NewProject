<?php
   if(isset($_POST['firstname']))
    {
         
       include_once('conexao.php');
       
       $nameUser = $_POST['firstname'];
       $lastName = $_POST['lastName'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $passwordUsers = $_POST['passwordUsers']; 
       $dateOfCiation = $_POST['dateOfCiation'];
       
       $result = mysqli_query($conexao, "INSERT INTO users(nameUser,lastName,email,phone,passwordUsers,dateOfCiation) VALUES
       ('$nameUser','$lastName','$email','$phone','$passwordUsers','$dateOfCiation')");

      header('Location: ../pages/masterUser.php');
    }
?>