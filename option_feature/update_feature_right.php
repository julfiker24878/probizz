<?php
session_start();
require '../session.php';
require '../db.php';
$id = $_POST['id'];
$choose_reason = mysqli_real_escape_string($db_connect, $_POST['choose_reason']);

$update = "UPDATE feature SET choose_reason='$choose_reason' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_feature.php?id='.$id);