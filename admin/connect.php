<?php
$connection = mysqli_connect('localhost', 'root', '','service desk');
mysqli_set_charset($connection,"utf8");
if (!$connection){
    die('Error connect database '. mysqli_connect_error());
}
?>