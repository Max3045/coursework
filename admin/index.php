<?php
    session_start();
    if (isset($_SESSION['name'])){
        header('Location: admin.php');
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Личный кабинет | Компания Kubit</title>
</head>
<body>

<!-- Page title -->


<!-- Page content -->
<div class="region">
    <!-- Block content -->
    <form class="formReg" action="signin.php" method="POST">
    <h2 id="page-title" class="title page-title" style="color:#c0cafa;">Личный кабинет</h2>
        <label style="color:#c0cafa;">Имя пользователя <span class="form-required" title="Обязательно для заполнения.">*</span></label>
        <input type="text" name="username" placeholder="Введите имя" size="60" maxlength="60">
        
        <label style="color:#c0cafa;"> Пароль <span class="form-required" title="Обязательно для заполнения.">*</span></label>
        <input type="password" name="password" placeholder="Введите пароль" size="60" maxlength="128" >
        <button type="submit" class="btn btn-success">Войти</button>

        <?php
        if (isset($_SESSION['message'])){
            echo ' <p class="msg">'. $_SESSION['message'].'</p>';
        }
            unset($_SESSION['message']);
        ?>
    </form>
</div>










<script src="js/jquery.js"></script>
<script src ="js/mainadm.js"></script>
</body>
</html>