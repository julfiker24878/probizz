<?php 
session_start();
require '../db.php';
require '../session.php';

$icon = mysqli_real_escape_string($db_connect, $_POST['icon']);
$title = mysqli_real_escape_string($db_connect, $_POST['title']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);

$insert = "INSERT INTO services(icon, title, des) VALUES('$icon','$title','$des')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Service added successfully!";
header('location: add_services.php');