<?php 
session_start();
require '../session.php';
require '../db.php';

// SELECTING NAME FIELDS //
$logo_text = $_POST['logo_text'];
$logo_image = $_FILES['logo_image'];
$after_explode = explode('.', $logo_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

// CONDITION FOR EMPTY IMAGE //
if(empty($logo_image['name'])){
	$insert_text = "INSERT INTO logo(logo_text) VALUES('$logo_text')";
	$insert_text_query = mysqli_query($db_connect, $insert_text);

	$_SESSION['success'] = "Logo added successfully!";
	header('location: add_logo.php');
}else{
	// CHECK EXTENSION //
	if (in_array($extension, $allowed_extension)) {

		// CHECK SIZE //
		if($logo_image['size'] < 5000000){
			
			// INSERT TEXT //
			$insert = "INSERT INTO logo(logo_text) VALUES('$logo_text')";
			$insert_result = mysqli_query($db_connect, $insert);

			// SELECT ID //
			$id = mysqli_insert_id($db_connect);
			$logo_name = "logo".$id.".".$extension;
			$new_location = 'uploaded/'.$logo_name;
			move_uploaded_file($logo_image['tmp_name'], $new_location);

			// UPDATE LOGO //
			$update_image = "UPDATE logo SET logo_image='$logo_name' WHERE id=$id ";
			$update_image_result = mysqli_query($db_connect, $update_image);

			// SUCCESS SESSION //
			$_SESSION['success'] = "Logo added successfully!";
			header('location: add_logo.php');
		}else{
			// LARGE IMAGE RESULT //
			$_SESSION['invalid_size'] = "File size too large!";
			header('location: add_logo.php');
		}
	}else{
		// INVALID IMAGE EXTENSION RESULT //
		$_SESSION['invalid_extension'] = "Invalid Extension!";
		header('location: add_logo.php');
	}
}