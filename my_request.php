<?php
    session_start();
    require_once 'connect.php';
    if (!$_SESSION['name']){
        header('Location: index.php');
        die();
   }
    $name=$_SESSION['name'];
    $query="SELECT * FROM `request` WHERE `name` LIKE '$name'";
    $result=mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_list.css">
    <title>Мои запросы</title>
</head>
<body>

<h2 style="color:#c0cafa;" id="heading">Мои заявки</h2>
<div class="btn">

    <div class="btn-group">
<form>
<input class="button" type="button" value="Вернуться назад"  onClick='document.location.href="/kursach/client.php"'>
</form></div>
<form><div class="btn-group">
<input class="button" type="button" value="Добавить заявку"  onClick='document.location.href="/kursach/new_request.php"'>
</form></div>
</div>


<div class="request_table">
<table class="table table-striped">
<thead>
    <tr>
        <th style="color:#c0cafa;">Статус</th>
        <th style="color:#c0cafa;">Номер<br>Дата</th>
        <th style="color:#c0cafa;">Содержание</th>
        <th style="color:#c0cafa;">Состояние</th> 
    </tr>
</thead>

<tbody>
            <?php
            while(($tab = mysqli_fetch_assoc($result)))
            {
            ?>
    <tr>
        <td style="color:#c0cafa;"><?php echo $tab['status'];?></td>
        <td><a href="cheek_request.php?id=<?php echo $tab['id'];?>"><?php echo $tab['id'];?><br><?php echo date("M d, Y, H:i", strtotime($tab['time']));;?></a></td>
        <td style="color:#c0cafa;"><a onclick="cheek_request()"><?php echo $tab['problemDescription'];?></a></td>
        <td style="color:#c0cafa;"><?php if($tab['position']==NULL){
            echo ('Открыто');
        }else{
            echo('Закрыто');
        }
        ?></td>
    </tr>
    <?php
            }
            ?>
</tbody>
</table>
</div>



<script src="js/jquery.js"></script>
<script src ="js/main.js"></script>
<script>
    
</script>
</body>
</html>