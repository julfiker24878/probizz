<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$delete_services = "DELETE FROM three_col WHERE id=$id";
$delete_services_query = mysqli_query($db_connect, $delete_services);

$_SESSION['deleted'] = "Deleted Successfully!";
header('location: view_three_col.php');