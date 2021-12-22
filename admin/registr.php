<?php
    session_start();
    if (!$_SESSION['name'] or ($_SESSION['name']!='admin')){
        header('Location: ../index.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Регистрация</title>
</head>
<body>
    <form class="formReg" action="signup.php" method="POST">
        <labe style="color:#c0cafa;">Имя<span class="form-required" title="Обязательно для заполнения.">*</span></labe>
        <input type="text" name="username" placeholder="Введите имя">
        <label style="color:#c0cafa;">Пароль<span class="form-required" title="Обязательно для заполнения.">*</span></label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label style="color:#c0cafa;">Подтверждение пароля<span class="form-required" title="Обязательно для заполнения.">*</span></label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button title="submit">Зарегистрировать</button>
        <?php
        if (isset($_SESSION['message'])){
            echo ' <p style="color:#c0cafa;" class="msg">'. $_SESSION['message'].'</p>';
        }
            unset($_SESSION['message']);
        ?>
        <form>
    <input type="button" value="Вернуться назад"  onClick='document.location.href="/kursach/admin/admin.php"'>
</form>
    </form>



    <script src="js/jquery.js"></script>
<script src ="js/main.js"></script>
</body>
</html>