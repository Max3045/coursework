<?php
    session_start();
    require_once 'connect.php';

    $name= $_POST['username'];
    $password= $_POST['password'];
    $password_confirm=$_POST['password_confirm'];

    if($password == $password_confirm and $password!='') {
        $salt=generateSalt(8);
        $salt_password=md5($password.$salt);
        $query="UPDATE `users` SET `pass` = '$salt_password', `salt` = '$salt' WHERE `users`.`name` = '$name'";
        //echo $query; die();
        $result = mysqli_query($connection, $query);


        $_SESSION['message']= 'Пароль успешно сменен!';
        header('Location: remove_password.php');
    } else{
        $_SESSION['message'] = 'Пароли не совпадают или поле осталось пустым';
        header('Location: remove_password.php');
    }


    function generateSalt($saltLength)
	{
		$salt = '';
		for($i=0; $i<$saltLength; $i++) {
			$salt .= chr(mt_rand(33,126)); //символ из ASCII-table
		}
		return $salt;
	}
?>