<?php
session_start();
require_once 'connect.php';
    if (!$_SESSION['name'] or ($_SESSION['name']!='admin')){
        header('Location: ../index.php');
        die();
    }
    $id=$_GET['id'];


    $query="SELECT * FROM `request` WHERE `id` = $id";
    $result=mysqli_query($connection, $query);
    $array=mysqli_fetch_assoc($result);

   $img= base64_encode($array['scrin']);?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <style>
           body{
            background-color: #181b2b;
            font-family: sans-serif;
           }
       </style>
   </head>
   <body>
   <a style="color:rgb(161, 161, 165);"href="cheek_request.php?id=<?php echo $id?>">Вернуться назад</a><br><br>
   <img src="data:image/jpeg;base64, <?php echo $img?>">

   </body>
   </html>
  

 