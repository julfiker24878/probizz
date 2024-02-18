<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$icon = mysqli_real_escape_string($db_connect, $_POST['icon']);
$title = mysqli_real_escape_string($db_connect, $_POST['title']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);

$update = "UPDATE services SET icon='$icon', title='$title', des='$des' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_services.php?id='.$id);