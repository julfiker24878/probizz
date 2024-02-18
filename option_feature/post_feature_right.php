<?php 
session_start();
require '../db.php';
require '../session.php';

$choose_reason = $_POST['choose_reason'];

$insert = "INSERT INTO feature_right(choose_reason) VALUES('$choose_reason')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Added successfully!";
header('location: add_feature_right.php');