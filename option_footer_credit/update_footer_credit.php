<?php
session_start();
require '../session.php';
require '../db.php';
$id = $_POST['id'];
$credit = mysqli_real_escape_string($db_connect, $_POST['credit']);
$link_text = mysqli_real_escape_string($db_connect, $_POST['link_text']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$update = "UPDATE footer_credit SET credit='$credit', link_text='$link_text', link='$link' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_footer_credit.php?id='.$id); 