<?php
session_start();
require '../db.php';

// SELECTING ID FROM URL //
$id = $_GET['id'];

// SELECT QUERY FOR IMAGE //
$select_image = "SELECT * FROM users WHERE id=$id";
$select_image_result = mysqli_query($db_connect, $select_image);
$after_assoc = mysqli_fetch_assoc($select_image_result);

// DELETE QUERY //
$delete = "DELETE FROM users WHERE id=$id";
$delete_query = mysqli_query($db_connect, $delete);

// DELETE IMAGE //
$delete_from = 'uploaded/'.$after_assoc['profile_image'];
unlink($delete_from);

// REDIRECTING USER WITH SESSION //
$_SESSION['deleted'] = "User has been deleted successfully!";
header('location: trashed.php');