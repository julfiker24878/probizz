<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$number = mysqli_real_escape_string($db_connect, $_POST['number']);
$email = mysqli_real_escape_string($db_connect, $_POST['email']);

$update = "UPDATE top_menu SET number='$number', email='$email' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_top_menu.php?id='.$id);