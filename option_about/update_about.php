<?php
session_start();
require '../session.php';
require '../db.php';
$id = $_POST['id'];
$sub_title = mysqli_real_escape_string($db_connect, $_POST['sub_title']);
$title_red = mysqli_real_escape_string($db_connect, $_POST['title_red']);
$title_blue = mysqli_real_escape_string($db_connect, $_POST['title_blue']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);

$about_image = $_FILES['about_image'];
$after_explode = explode('.', $about_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'JPG', 'JPEG', 'PNG');

if($about_image['name'] != ''){
	if(in_array($extension, $allowed_extension)){
		if($about_image['size'] < 5000000){

			$select_image = "SELECT * FROM about WHERE id=$id";
			$select_image_result = mysqli_query($db_connect, $select_image);
			$after_assoc = mysqli_fetch_assoc($select_image_result);

			$delete_from = 'uploaded/'.$after_assoc['about_image'];
			unlink($delete_from);

			$update = "UPDATE about SET sub_title='$sub_title', title_red='$title_red', title_blue='$title_blue', des='$des' WHERE id=$id ";
			$update_result = mysqli_query($db_connect, $update);

			$image_name = "about".$id.'.'.$extension;
			$new_location = 'uploaded/'.$image_name;
			move_uploaded_file($about_image['tmp_name'], $new_location);

			$update_image = "UPDATE about SET about_image='$image_name' WHERE id=$id ";
			$update_image_result = mysqli_query($db_connect, $update_image);

			$_SESSION['success'] = "Your all settings have been changed successfully!";
			header('location: edit_about.php?id='.$id);

			
		}else{
			$_SESSION['invalid_size'] = "File size too large!";
			header('location: edit_about.php?id='.$id);
		}
	}else{
		$_SESSION['invalid_extension'] = "Invalid Extension!";
		header('location: edit_about.php?id='.$id);
	}
}else{
	$update = "UPDATE about SET sub_title='$sub_title', title_red='$title_red', title_blue='$title_blue', des='$des' WHERE id=$id ";
	$update_result = mysqli_query($db_connect, $update);

	$_SESSION['success'] = "Your all settings have been changed successfully!";
	header('location: edit_about.php?id='.$id);
}