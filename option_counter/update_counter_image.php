<?php
session_start();
require '../session.php';
require '../db.php';
$id = $_POST['id'];
$name = mysqli_real_escape_string($db_connect, $_POST['name']);

$image = $_FILES['image'];
$after_explode = explode('.', $image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'JPG', 'JPEG', 'PNG');

if($image['name'] != ''){
	if(in_array($extension, $allowed_extension)){
		if($image['size'] < 5000000){

			$select_image = "SELECT * FROM counter_image WHERE id=$id";
			$select_image_result = mysqli_query($db_connect, $select_image);
			$after_assoc = mysqli_fetch_assoc($select_image_result);

			$delete_from = 'uploaded/'.$after_assoc['image'];
			unlink($delete_from);

			$update = "UPDATE counter_image SET name='$name' WHERE id=$id ";
			$update_result = mysqli_query($db_connect, $update);

			$image_name = "counter_image".$id.'.'.$extension;
			$new_location = 'uploaded/'.$image_name;
			move_uploaded_file($image['tmp_name'], $new_location);

			$update_image = "UPDATE counter_image SET image='$image_name' WHERE id=$id ";
			$update_image_result = mysqli_query($db_connect, $update_image);

			$_SESSION['success'] = "Image been changed successfully!";
			header('location: edit_counter_image.php?id='.$id);

			
		}else{
			$_SESSION['invalid_size'] = "File size too large!";
			header('location: edit_counter_image.php?id='.$id);
		}
	}else{
		$_SESSION['invalid_extension'] = "Invalid Extension!";
		header('location: edit_counter_image.php?id='.$id);
	}
}else{
	$update = "UPDATE counter_image SET name='$name' WHERE id=$id ";
	$update_result = mysqli_query($db_connect, $update);

	$_SESSION['success'] = "Image been changed successfully!";
	header('location: edit_counter_image.php?id='.$id);
}