<?php 
session_start();
require '../db.php';
require '../session.php';

$package_id = $_POST['package_id'];
$list = $_POST['list'];

$insert = "INSERT INTO pricing_lists(package_id, list) VALUES('$package_id','$list')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Added successfully!";
header('location: add_pricing_lists.php');