<?php
    session_start();
    require_once 'connect.php';
    $id=($_GET['id']);
    $query="UPDATE `request` SET `position` = '1' WHERE `request`.`id` = $id";
    $result=mysqli_query($connection, $query);
    $_SESSION['message'] = 'Заявление закрыто!';
    header("Location: cheek_request.php?id=$id");
?>