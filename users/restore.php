<?php

session_start();
require '../db.php';

// GETTING ID FROM URL //
$id = $_GET['id'];

// UPDATE QUERY //
$update = "UPDATE users SET status=0 WHERE id=$id";
$update_query = mysqli_query($db_connect, $update);

// RESTORE SUCCESS SESSION //
$_SESSION['restored'] = "User has been restored!";
header('location: trashed.php');