<?php 
session_start();
require '../db.php';
require '../session.php';

$title = mysqli_real_escape_string($db_connect, $_POST['title']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$insert = "INSERT INTO important_links(title, link) VALUES('$title','$link')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Added successfully!";
header('location: add_important_links.php');