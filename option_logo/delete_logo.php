<?php
session_start();
require '../session.php';
require '../db.php';

// GETTING ID FROM URL //
$id = $_GET['id'];

// SELECT QUERY FOR LOGO TABLE //
$select = "SELECT * FROM logo WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

// DELETING LOGO IMAGE //
$delete_from = 'uploaded/'.$after_assoc['logo_image'];
unlink($delete_from);

// DELETE QUERY //
$delete = "DELETE FROM logo WHERE id=$id";
$delete_result = mysqli_query($db_connect, $delete);

// REDIRECTING USER WITH SESSION AFTER DELETING LOGO //
$_SESSION['deleted'] = "Logo removed Successfully!";
header('location: view_logo.php');