<?php
session_start();
require '../../session.php';
require '../../db.php';
$id = $_POST['id'];
$sub_title = mysqli_real_escape_string($db_connect, $_POST['sub_title']);
$title_red = mysqli_real_escape_string($db_connect, $_POST['title_red']);
$title_blue = mysqli_real_escape_string($db_connect, $_POST['title_blue']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);

$update = "UPDATE contact_header SET sub_title='$sub_title', title_red='$title_red', title_blue='$title_blue', des='$des' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_header.php?id='.$id);