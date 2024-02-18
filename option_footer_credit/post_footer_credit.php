<?php 
session_start();
require '../db.php';
require '../session.php';

$credit = mysqli_real_escape_string($db_connect, $_POST['credit']);
$link_text = mysqli_real_escape_string($db_connect, $_POST['link_text']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$insert = "INSERT INTO footer_credit(credit, link_text, link) VALUES('$credit','$link_text','$link')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Added successfully!";
header('location: add_footer_credit.php');