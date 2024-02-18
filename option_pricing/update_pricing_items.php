<?php
session_start();
require '../session.php';
require '../db.php';
$id = $_POST['id'];
$package_name = mysqli_real_escape_string($db_connect, $_POST['package_name']);
$price = mysqli_real_escape_string($db_connect, $_POST['price']);

$update = "UPDATE pricing_items SET package_name='$package_name', price='$price' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all changes have been saved successfully!";
header('location: edit_pricing_items.php?id='.$id);