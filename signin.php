<?php
    session_start();
    require_once 'connect.php';

    $name= $_POST['username'];
    $query_user= "SELECT * FROM `users` WHERE `name`='$name'";

    $result_user= mysqli_query($connection,$query_user);
    $user=mysqli_fetch_assoc($result_user);
    $salt=$user['salt'];
    $password = $_POST['password'];
    $password = $password.$salt;
    $salt_password = md5($password);
    $query= "SELECT * FROM `users` WHERE `name`='$name' and `pass`='$salt_password' ";
    $check_user= mysqli_query($connection,$query);
    
    if(mysqli_num_rows($check_user) > 0 ){
        $_SESSION['name']=$user['name']; 
       header('Location: applicationForm.php');
   }else{
       $_SESSION['message']='Неверный логин или пароль';
       header('Location: index.php');
   }
?>