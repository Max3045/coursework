<?php
    session_start();
    if (!$_SESSION['name']){
        header('Location: index.php');
        die();
   }
   
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="style_home.css" rel="stylesheet">
    <title>Личный кабинет</title>
</head>
<body>
<h1 <span style="color:#c0cafa;">Kubit</h1>
<div class="btn-group-vertical">
     <div class="btn"><form>
<input class="button" type="button" value="Добавить заявку"  onClick='document.location.href="/kursach/new_request.php"'>
</form></div>
<div class="btn"><form>
<input class="button" type="button" value="Мои заявки" onClick='document.location.href="/kursach/my_request.php"'>
</form></div>
<div class="btn"><form>
<input class="button" type="button" class ="floating-button" value="Выход" onClick='document.location.href="/kursach/logout.php"'>
</form></div>
     </div>

<div class="block-content">
		<div class="content">
	<span style="color:#c0cafa;"><span style="font-size:17px;"><em>Уважаемый Клиент!</em></span></span></div>
<div class="rtejustify">
	 </div>
<div class="rtejustify">
	<span style="color:#c0cafa;"><span style="font-size:17px;"><em>Мы рады приветствовать Вас в личном кабинете нашего сайта. Здесь Вы можете отправить заявку на оказание услуг, обратиться за консультацией по программам, которые мы обслуживаем. Так же Вы можете просмотреть историю своих заявок и запросов на консультации.</em></span></span></div>
<div class="rtejustify">
	<span style="color:#c0cafa;"><span style="font-size:17px;"><em>Для отправки заявки выберите в правом меню ссылку "Добавить заявку".</em></span></span></div>
<div class="rtejustify">
	<span style="color:#c0cafa;"><span style="font-size:17px;"><em>Для просмотра своих заявок в правом меню выберите ссылку "Мои заявки".</em></span></span></div>
</div>





<script src="js/jquery.js"></script>
<script src ="js/main.js"></script>
</body>
</html>
