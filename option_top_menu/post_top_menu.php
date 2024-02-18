<?php 
session_start();
require '../db.php';
require '../session.php';

$number = mysqli_real_escape_string($db_connect, $_POST['number']);
$email = mysqli_real_escape_string($db_connect, $_POST['email']);

$insert = "INSERT INTO top_menu(number, email) VALUES('$number','$email')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Account added successfully!";
header('location: add_top_menu.php');