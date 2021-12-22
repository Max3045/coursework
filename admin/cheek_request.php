<?php
    session_start();
    require_once 'connect.php';
    if (!$_SESSION['name'] or ($_SESSION['name']!='admin')){
        header('Location: ../index.php');
        die();
    }
    $id=$_GET['id'];


    $name=$_SESSION['name'];
    $query="SELECT * FROM `request` WHERE `id` = $id";
   // echo $query; die();
    $result=mysqli_query($connection, $query);
    $array=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_request.css">
    <title>Просмотр заявки</title>
</head>
<body>

<div class="btn">
<form>
<input class="button" type="button" value="Вернуться назад"  onClick='document.location.href="/kursach/admin/my_request.php"'>
</form>
</div>
<fieldset>
       <div class="forma"> <legend ><span class="fieldset-legend" style="color:#c0cafa;">Заявка от <?php echo date("M d, Y, H:i", strtotime($array['time']));;?></span></legend></div>
        <div class="forma"><label style="color:#c0cafa;">Статус: <i style="font-weight: normal;"><?php echo $array['status'];?></i></label></div><br>
        <div class="forma"><label style="color:#c0cafa;">Контактное лицо: <i style="font-weight: normal;"><?php echo ($array['contactPersone'].', '. $array['contact']);?></i></label></div><br>
        <div class="forma"><label style="color:#c0cafa;">Программа №<i style="font-weight: normal;"><?php echo $array['programm'];?></i></label></div>
        <div class="forma"><label style="color:#c0cafa;">Содержание:</label><textarea><?php echo $array['problemDescription'];?></textarea></div><br>
        <div class="forma">
        <?php
            if($array['commentUrgency']!=NULL){?>
                <div><label style="color:#c0cafa;">Комментарий срочности: <i style="font-weight: normal;"><?php echo $array['commentUrgency']?> </i></label></div>
            <?php }?></div><br>
        <div class="forma"><label style="color:#c0cafa;">Время реакции: <i style="font-weight: normal;"><?php echo date("M d, Y", strtotime($array['timeReaction']));?></i></label></div>
        <div class="forma">
        <?php
            if($array['scrin']!=NULL){?>
                <a href="cheek_scrin.php?id=<?php echo $id?>">Просмотреть изображение</a>
            <?php }?></div>
       <div class="forma">     
<a href="close_request.php?id=<?php echo $id?>">Закрыть задачу</a></div>
</fieldset>
 

<p>        <?php
        if (isset($_SESSION['message'])){
            echo ' <p style="color:#c0cafa;" class="msg">'. $_SESSION['message'].'</p>';
        }
            unset($_SESSION['message']);
        ?></p>




<script src="js/jquery.js"></script>
<script src ="js/main.js"></script>
</body>
</html>