<?php
    session_start();
    if (!$_SESSION['name']){
        header('Location: index.php');
   }
   
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>
<body>
<p>  <a class="logout"  href="logout.php">Выйти</a>
    </p>
</body>
</html>