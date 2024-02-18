<?php

session_start();
require '../db.php';

// GETTING ID FROM URL //
$id = $_GET['id'];

// SELECT QUERY //
$select = "SELECT * FROM users WHERE id=$id";
$select_query = mysqli_query($db_connect, $select);
$assoc = mysqli_fetch_assoc($select_query);

// CONDITION FOR DELETEING ADMIN //
if($assoc['role'] == 1){
    $_SESSION['failed'] = "You can't remove an Admin!";
    header('location: view.php');
}else{
    // UPDATE QUERY //
    $update = "UPDATE users SET status=1 WHERE id=$id";
    $update_query = mysqli_query($db_connect, $update);

    // SUCCESS TRASH SESSION //
    $_SESSION['trashed'] = "User has been trashed!";
    header('location: view.php');
}