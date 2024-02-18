<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$title = mysqli_real_escape_string($db_connect, $_POST['title']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$update = "UPDATE important_links SET title='$title', link='$link' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all changes have been saved successfully!";
header('location: edit_important_links.php?id='.$id);