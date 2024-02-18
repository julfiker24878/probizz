<?php 
session_start();
require '../../db.php';
require '../../session.php';

$sub_title = $_POST['sub_title'];
$title_red = $_POST['title_red'];
$title_blue = $_POST['title_blue'];
$des = $_POST['des'];

$insert = "INSERT INTO latest_blog_header(sub_title, title_red, title_blue, des) VALUES('$sub_title','$title_red','$title_blue','$des')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Added successfully!";
header('location: add_header.php');