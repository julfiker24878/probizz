<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$sub = $_POST['sub'];

$update = "UPDATE subscribe SET sub='$sub' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Changes have been saved successfully!";
header('location: edit_subscribe.php?id='.$id);