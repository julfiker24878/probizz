<?php 
session_start();
require '../../db.php';
require '../../session.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = mysqli_real_escape_string($db_connect, $_POST['message']);

if(empty($name)){
    $_SESSION['name_empty'] = "Please enter your name!";
    header('location: /cit/probizz/index.php');
}elseif(empty($email)){
    $_SESSION['email_empty'] = "Please enter your name!";
    header('location: /cit/probizz/index.php');
}elseif(empty($message)){
    $_SESSION['message_empty'] = "Please enter your name!";
    header('location: /cit/probizz/index.php');
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['invalid_email'] = "Please enter your name!";
    header('location: /cit/probizz/index.php');
}else{
    date_default_timezone_set('Asia/Dhaka');
    $submitted_at = date('Y-m-d');
    $insert = "INSERT INTO contact_form(name, email, subject, message, submitted_at) VALUES('$name','$email','$subject','$message','$submitted_at')";
    $insert_result = mysqli_query($db_connect, $insert);

    $_SESSION['success'] = "Thanks for your message. We will be in touch with you shortly!";
    header('location: /cit/probizz/index.php');
}