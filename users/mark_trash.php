<?php

session_start();
require '../db.php';

$mark_trash = $_POST['mark_trash'];

// FOREACH LOOP FOR GETTING ID FROM MARK TRASH //
foreach($mark_trash as $id){
	$update = "UPDATE users SET status=1 WHERE id=$id";
	$update_result = mysqli_query($db_connect, $update);
}

// MARL TRASH SUCCESS SESSION //
$_SESSION['mark_trash_success'] = "Users has been trashd successfully!";
header('location: view.php');