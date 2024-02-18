<?php
session_start();
require '../session.php';
require '../db.php';

// SELECTING NAME FIELDS //
$id = $_POST['id'];
$logo_text = $_POST['logo_text'];
$logo_image = $_FILES['logo_image'];
$after_explode = explode('.', $logo_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'JPG', 'JPEG', 'PNG');

// CONDITION FOR EMPTY IMAGE //
if($logo_image['name'] != ''){

	// CONDITION FOR ALLOWED EXTENSIONS //
	if(in_array($extension, $allowed_extension)){

		// CONDITION FOR IMAGE SIZE //
		if($logo_image['size'] < 5000000){

			// SELECT QUERY FOR LOGO TABLE //
			$select_logo = "SELECT * FROM logo WHERE id=$id";
			$select_logo_result = mysqli_query($db_connect, $select_logo);
			$after_assoc = mysqli_fetch_assoc($select_logo_result);

			// DELETING LOGO IMAGE //
			$delete_from = 'uploaded/'.$after_assoc['logo_image'];
			unlink($delete_from);

			// UPDATE QUERY FOR LOGO TABLE //
			$update = "UPDATE logo SET logo_text='$logo_text' WHERE id=$id ";
			$update_result = mysqli_query($db_connect, $update);

			// CREATING LOGO NAME AND LOCATION //
			$logo_name = "logo".$id.'.'.$extension;
			$new_location = 'uploaded/'.$logo_name;
			move_uploaded_file($logo_image['tmp_name'], $new_location);

			// UPDATE QUERY FOR LOGO IMAGE //
			$update_logo = "UPDATE logo SET logo_image='$logo_name' WHERE id=$id ";
			$update_logo_result = mysqli_query($db_connect, $update_logo);

			// SUCCESS SESSION //
			$_SESSION['success'] = "Your logo has been changed successfully!";
			header('location: edit_logo.php?id='.$id);

			
		}else{
			// SESSION FOR LARGE IMAGE SIZE //
			$_SESSION['invalid_size'] = "File size too large!";
			header('location: edit_logo.php?id='.$id);
		}
	}else{
		// SESSION FOR INVALID IMAGE EXTENSIONS //
		$_SESSION['invalid_extension'] = "Invalid Extension!";
		header('location: edit_logo.php?id='.$id);
	}
}else{
	// UPDATE QUERY FOR LOGO TABLE //
	$update = "UPDATE logo SET logo_text='$logo_text' WHERE id=$id ";
	$update_result = mysqli_query($db_connect, $update);

	// SUCCESS SESSION //
	$_SESSION['success'] = "Your logo has been changed successfully!";
	header('location: edit_logo.php?id='.$id);
}