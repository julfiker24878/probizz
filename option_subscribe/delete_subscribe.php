<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$delete_subscribe = "DELETE FROM subscribe WHERE id=$id";
$delete_subscribe_query = mysqli_query($db_connect, $delete_subscribe);

$_SESSION['deleted'] = "Deleted Successfully!";
header('location: view_subscribe.php');