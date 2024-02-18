<?php 
session_start();
require '../db.php';
require '../session.php';

$title = strtolower($_POST['title']);

$insert = "INSERT INTO portfolio_tabs(title) VALUES('$title')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Added successfully!";
header('location: add_portfolio_tabs.php');