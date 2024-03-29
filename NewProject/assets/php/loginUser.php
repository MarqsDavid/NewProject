<?php
    session_start();
    print_r($_REQUEST);

    use LDAP\Result;

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['passwordUsers']))
    {

        include_once('conexao.php');
        $email = $_POST['email'];
        $passwordUsers = $_POST['passwordUsers'];


       $sql = "SELECT * FROM users WHERE email = '$email' and passwordUsers = '$passwordUsers'";
       
       
       $result = $conexao->query($sql);
    


       if(mysqli_num_rows($result) < 1)
       {
        unset($_SESSION['email']);
        unset($_SESSION['passwordUsers']);
        header('Location: ../login.php');
       }

       else
       {
        $_SESSION['email'] = $email;
        $_SESSION['passwordUsers'] = $passwordUsers;
        header('Location: ../pages/home.php');
       }
    }

    else
    {
        header('Location: ../login.php');
    }
?>