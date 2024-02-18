<?php 
session_start();
require '../db.php';
require '../session.php';

$icon = $_POST['icon'];
$num = $_POST['num'];
$text = $_POST['text'];

$insert = "INSERT INTO counter_text(icon, num, text) VALUES('$icon','$num','$text')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Added successfully!";
header('location: add_counter.php');