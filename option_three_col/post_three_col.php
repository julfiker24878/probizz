<?php 
session_start();
require '../db.php';
require '../session.php';

$icon = mysqli_real_escape_string($db_connect, $_POST['icon']);
$title_red = mysqli_real_escape_string($db_connect, $_POST['title_red']);
$title_blue = mysqli_real_escape_string($db_connect, $_POST['title_blue']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);

$insert = "INSERT INTO three_col(icon, title_red, title_blue, des) VALUES('$icon','$title_red','$title_blue','$des')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Added successfully!";
header('location: add_three_col.php');