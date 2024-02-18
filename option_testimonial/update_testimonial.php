<?php
session_start();
require '../session.php';
require '../db.php';

$review = $_POST['review'];
$id = $_POST['id'];
$comment = mysqli_real_escape_string($db_connect, $_POST['comment']);
$name = mysqli_real_escape_string($db_connect, $_POST['name']);
$designation = mysqli_real_escape_string($db_connect, $_POST['designation']);

$profile_image = $_FILES['profile_image'];
$after_explode = explode('.', $profile_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'JPG', 'JPEG', 'PNG');

if($profile_image['name'] != ''){
	if(in_array($extension, $allowed_extension)){
		if($profile_image['size'] < 5000000){

			$select_image = "SELECT * FROM testimonial WHERE id=$id";
			$select_image_result = mysqli_query($db_connect, $select_image);
			$after_assoc = mysqli_fetch_assoc($select_image_result);

			$delete_from = 'uploaded/'.$after_assoc['profile_image'];
			unlink($delete_from);

			$update = "UPDATE testimonial SET review='$review', comment='$comment', name='$name', designation='$designation' WHERE id=$id ";
			$update_result = mysqli_query($db_connect, $update);

			$image_name = "testimonial".$id.'.'.$extension;
			$new_location = 'uploaded/'.$image_name;
			move_uploaded_file($profile_image['tmp_name'], $new_location);

			$update_image = "UPDATE testimonial SET profile_image='$image_name' WHERE id=$id ";
			$update_image_result = mysqli_query($db_connect, $update_image);

			$_SESSION['success'] = "Your all changes have been saved successfully!";
			header('location: edit_testimonial.php?id='.$id);

			
		}else{
			$_SESSION['invalid_size'] = "File size too large!";
			header('location: edit_testimonial.php?id='.$id);
		}
	}else{
		$_SESSION['invalid_extension'] = "Invalid Extension!";
		header('location: edit_testimonial.php?id='.$id);
	}
}else{
	$update = "UPDATE testimonial SET review='$review', comment='$comment', name='$name', designation='$designation' WHERE id=$id ";
	$update_result = mysqli_query($db_connect, $update);

	$_SESSION['success'] = "Your all changes have been saved successfully!";
	header('location: edit_testimonial.php?id='.$id);
}