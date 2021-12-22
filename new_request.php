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
    <link rel="stylesheet" href="style_request.css">
    <title>Новая заявка</title>
</head>
<body>

<div class="btn">
    <div class=" btn-group"><form>
<input class="button" type="button" value="Вернуться назад"  onClick='document.location.href="/kursach/client.php"'>
</form></div>
<form><div class="btn-group">
<input class="button" type="button" value="Мои заявки" onClick='document.location.href="/kursach/my_request.php"'>
</form></div>
    </div>


    <form enctype="multipart/form-data" action="send_request.php" method="POST">
        <fieldset>
        <legend style="color:#c0cafa;"><span class="fieldset-legend">Новая заявка</span></legend>
        <div class ="forma">
        <label style="color:#c0cafa;">Контактное лицо <span class="form-required" title="Обязательно для заполнения.">*</span></label>
        <input type="text" name="name" placeholder="Введите имя" >
        </div>
        <div class="forma">
        <label style="color:#c0cafa;">Программа: <span class="form-required" title="Обязательно для заполнения.">*</span></label>
        <select name="program">
            <option value="">-Выберите-</option>
            <option value="1">Программа 1</option>
            <option value="2">Программа 2</option>
            <option value="3">Программа 3</option>
        </select>
        </div>
        <div class="forma">
            <label style="color:#c0cafa;">Статус: </label>
            <select name="status">
                <option value="Обычный">Обычный</option>
                <option value="Срочный">Срочный</option>
            </select>
        </div>
        <div class="forma">
        <label style="color:#c0cafa;">Телефон, почта: <span class="form-required" title="Обязательно для заполнения.">*</span></label>
        <input type="text" name="contact">
        <div class="forma-comm" style="color:#c0cafa;"><i>Как с вами связаться?</i></div>
        </div>
        <div class="forma">
            <label style="color:#c0cafa;">Содержание:<span class="form-required" title="Обязательно для заполнения.">*</span></label>
            <textarea name="content"></textarea>
            <div class="forma-comm" style="color:#c0cafa;"><i>Что по вашему мнению программу делает не так?</i></div>
        </div>
        <div class="forma">
            <label style="color:#c0cafa;">Время реакции:</label><br>
            <label style="color:#c0cafa;">День</label>
            <select id="edit-day" name="day" class="form-select"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17" selected="selected">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
            <label style="color:#c0cafa;">Месяц</label>
            <select id="edit-month" name="moth" class="form-select"><option value="1">Янв</option><option value="2">Фев</option><option value="3">Мар</option><option value="4">Апр</option><option value="5">мая</option><option value="6">Июн</option><option value="7">Июл</option><option value="8">Авг</option><option value="9">Сен</option><option value="10">Окт</option><option value="11">Ноя</option><option value="12" selected="selected">Дек</option></select>
            <label style="color:#c0cafa;">Год</label>
            <select id="edit-year" name="year" class="form-select"><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021" selected="selected">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option></select></select>
        </div>
        <div class="forma-comm" id="comment">
            <label style="color:#c0cafa;"><i>Комментарий срочности:</i></label>
            <input type="text" name="comment_urgency">
        </div>
        <div class="forma">
            <label style="color:#c0cafa;">Скриншот ошибки: </label>
            <input type="file" name="scrin">
        </div>
        </div>
<input class="button"type="submit" id="edit-submit" name="op" value="Добавить заявку" class="form-submit" /></div>
        </fieldset>
        <?php
        if (isset($_SESSION['message'])){
            echo ' <p style="color:#c0cafa;" class="msg">'. $_SESSION['message'].'</p>';
        }
            unset($_SESSION['message']);
        ?>
    </form>

<script src="js/jquery.js"></script>
<script src ="js/main.js"></script>
</body>
</html>