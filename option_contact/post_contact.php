<?php 
session_start();
require '../db.php';
require '../session.php';

$icon = mysqli_real_escape_string($db_connect, $_POST['icon']);
$title = mysqli_real_escape_string($db_connect, $_POST['title']);

$insert = "INSERT INTO contact(icon, title) VALUES('$icon','$title')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Content added successfully!";
header('location: add_contact.php');