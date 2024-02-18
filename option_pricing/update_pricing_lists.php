<?php
session_start();
require '../session.php';
require '../db.php';
$id = $_POST['id'];
$list = mysqli_real_escape_string($db_connect, $_POST['list']);

$update = "UPDATE pricing_lists SET list='$list' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your changes have been saved successfully!";
header('location: edit_pricing_lists.php?id='.$id);