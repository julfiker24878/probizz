<?php
session_start();
require '../../session.php';
require '../../db.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = mysqli_real_escape_string($db_connect, $_POST['message']);

$update = "UPDATE contact_form SET name='$name', email='$email', subject='$subject', message='$message' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_contact_form.php?id='.$id);