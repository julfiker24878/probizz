<?php 
session_start();
require '../db.php';
require '../session.php';

$name = $_POST['name'];
$image = $_FILES['image'];

$after_explode = explode('.', $image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($image['size'] < 5000000){
		$insert = "INSERT INTO counter_image(name) VALUES('$name')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$counter_image_name = "counter_image".$id.".".$extension;
		$new_location = 'uploaded/'.$counter_image_name;
		move_uploaded_file($image['tmp_name'], $new_location);

		$update_image = "UPDATE counter_image SET image='$counter_image_name' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "Image added successfully!";
		header('location: add_counter_image.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_counter_image.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_counter_image.php');
}