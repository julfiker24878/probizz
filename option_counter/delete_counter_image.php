<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$select = "SELECT * FROM counter_image WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

$delete_from = 'uploaded/'.$after_assoc['image'];
unlink($delete_from);

$delete = "DELETE FROM counter_image WHERE id=$id";
$delete_result = mysqli_query($db_connect, $delete);

$_SESSION['deleted'] = "Deleted Successfully!";
header('location: view_counter_image.php');