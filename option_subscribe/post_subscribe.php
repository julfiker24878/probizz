<?php 
session_start();
require '../db.php';
require '../session.php';

$sub = $_POST['sub'];

if(empty($sub)){
    $_SESSION['failed'] = "Please enter your email address!";
    header('location: /cit/probizz/index.php');
}elseif(!filter_var($sub, FILTER_VALIDATE_EMAIL)){
    $_SESSION['invalid'] = "Please enter your email address!";
    header('location: /cit/probizz/index.php');
}else{
    date_default_timezone_set('Asia/Dhaka');
    $subscribed_at = date('Y-m-d');
    $insert = "INSERT INTO subscribe(sub, subscribed_at) VALUES('$sub','$subscribed_at')";
    $insert_result = mysqli_query($db_connect, $insert);

    $_SESSION['success'] = "Thanks for subscribing our newsletter!";
    header('location: /cit/probizz/index.php');
}