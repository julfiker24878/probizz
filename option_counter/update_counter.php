<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$icon = mysqli_real_escape_string($db_connect, $_POST['icon']);
$num = mysqli_real_escape_string($db_connect, $_POST['num']);
$text = mysqli_real_escape_string($db_connect, $_POST['text']);

$update = "UPDATE counter_text SET icon='$icon', num='$num', text='$text' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_counter.php?id='.$id);
