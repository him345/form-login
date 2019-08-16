<?php
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username)||empty($password)){
        header('location:../file/empty.php');
    }elseif($username =='admin'&& $password=="password"){
        header("location:../file/success.php");
    }else{
        header('location:../file/create-acc.php');
    }
}elseif(isset($_POST['register'])){
    header('location:../file/register.php');
}
?>