<?php
    session_start();
    require_once 'connect.php';

    $name=$_SESSION['name'];
    $contact_person=$_POST['name'];
    $program=$_POST['program'];
    $status=$_POST['status'];
    $contact=$_POST['contact'];
    $problem_description=$_POST['content'];
    $day=$_POST['day'];
    $moth=$_POST['moth'];
    $year=$_POST['year'];
    $comment_urgency=$_POST['comment_urgency'];
    if(!empty($_FILES['scrin']['tmp_name'])){
        $scrin=addslashes(file_get_contents($_FILES['scrin']['tmp_name']));
        $query="INSERT INTO `request` (`id`, `name`, `status`, `contactPersone`, `programm`, `contact`, `problemDescription`, `time`, `timeReaction`, `commentUrgency`, `scrin`) VALUES (NULL, '$name', '$status', '$contact_person', '$program', '$contact', '$problem_description', CURTIME(), '$year-$moth-$day', '$comment_urgency', '$scrin')";
        $result = mysqli_query($connection, $query);

    }else{
    $query="INSERT INTO `request` (`id`, `name`, `status`, `contactPersone`, `programm`, `contact`, `problemDescription`, `time`, `timeReaction`, `commentUrgency`) VALUES (NULL, '$name', '$status', '$contact_person', '$program', '$contact', '$problem_description', CURTIME(), '$year-$moth-$day', '$comment_urgency')";
    $result = mysqli_query($connection, $query);
    }
    $_SESSION['message']= 'Заявка отправлена!';
    header('Location: new_request.php');
?>