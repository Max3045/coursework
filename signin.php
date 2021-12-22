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
        $_SESSION['name'] = $name;
       $response= [
        "status" => true
       ];
       echo(json_encode($response));
   }else{
          $response=[
        'status' => false,
        'message' => 'Неверный логин или пароль'
       ];
       echo(json_encode($response));
   }
?>