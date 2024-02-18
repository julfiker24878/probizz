<?php

session_start();
require '../db.php';

// CONDITION FOR RESTORE BUTTON //
if(isset($_POST['res'])){
		$marked = $_POST['marked'];

		foreach($marked as $id){
		$update = "UPDATE users SET status=0 WHERE id=$id";
		$update_result = mysqli_query($db_connect, $update);
	}
	// SUCCESS SESSION //
	$_SESSION['marked_success'] = "Users has been restored successfully!";
	header('location: trashed.php');

// 	CONDITION FOR DELETE BUTTON //
}elseif(isset($_POST['del'])){
		$marked = $_POST['marked'];

		foreach($marked as $id){
		$delete = "DELETE FROM users WHERE id=$id";
		$delete_result = mysqli_query($db_connect, $delete);
	}
	// SUCCESS SESSION //
	$_SESSION['marked_delete'] = "Users has been deleted successfully!";
	header('location: trashed.php');
}