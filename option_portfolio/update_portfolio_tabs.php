<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$title = strtolower($_POST['title']);

$update = "UPDATE portfolio_tabs SET title='$title' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all changes have been saved successfully!";
header('location: edit_portfolio_tabs.php?id='.$id);