<?php
    session_start();
    if (!$_SESSION['name'] or ($_SESSION['name']!='admin')){
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../admin_style.css">
    <title>Доступ администратора</title>
</head>
<body>
    <div class="btn">
    <div class="btn-group-vertical">
<form>
<input class ="button" type="button" value="Регистрация пользователя"  onClick='document.location.href="/kursach/admin/registr.php"'>
</form></div>
<div class="btn-group-vertical1">
<form>
<input class ="button" type="button" value="Просмотр заявок"  onClick='document.location.href="/kursach/admin/my_request.php"'>
</form></div>
<div class="btn-group-vertical2">
<form>
<input class ="button" type="button" value="Смена пароля"  onClick='document.location.href="/kursach/admin/remove_password.php"'>
</form></div>
<div class="btn-group-vertical3"> <form>
<input class ="button" type="button" value="Выйти"  onClick='document.location.href="/kursach/logout.php"'>
</form></div>
</div>

<script src="js/jquery.js"></script>
<script src ="js/main.js"></script>
</body>
</html>