<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$icon = mysqli_real_escape_string($db_connect, $_POST['icon']);
$title_red = mysqli_real_escape_string($db_connect, $_POST['title_red']);
$title_blue = mysqli_real_escape_string($db_connect, $_POST['title_blue']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);

$update = "UPDATE three_col SET icon='$icon', title_red='$title_red', title_blue='$title_blue', des='$des' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_three_col.php?id='.$id);