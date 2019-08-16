<?php
    if(isset($_POST['register1'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $message = $_POST['text'];
        if(empty($username)||empty($password)||empty($email)){
            header('location:../file/register-empty.php');
        }else{
            header("location:../file/final-register.php");
        }
}
?>