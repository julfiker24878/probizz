<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$delete_top_menu = "DELETE FROM top_menu WHERE id=$id";
$delete_top_menu_query = mysqli_query($db_connect, $delete_top_menu);

$_SESSION['deleted'] = "Deleted Successfully!";
header('location: view_top_menu.php');