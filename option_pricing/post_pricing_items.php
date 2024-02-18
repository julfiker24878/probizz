<?php 
session_start();
require '../db.php';
require '../session.php';

$package_name = $_POST['package_name'];
$price = $_POST['price'];

$insert = "INSERT INTO pricing_items(package_name, price) VALUES('$package_name','$price')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Added successfully!";
header('location: add_pricing_items.php');