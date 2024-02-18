<?php 
session_start();
require '../db.php';
require '../session.php';

date_default_timezone_set('Asia/Dhaka');
$created_at = date('Y-m-d');
$heading = $_POST['heading'];
$description = $_POST['description'];
$banner_image = $_FILES['banner_image'];

$after_explode = explode('.', $banner_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($banner_image['size'] < 5000000){
		$insert = "INSERT INTO latest_blog(heading, description, created_at) VALUES('$heading','$description','$created_at')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$banner_name = "banner".$id.".".$extension;
		$new_location = 'uploaded/'.$banner_name;
		move_uploaded_file($banner_image['tmp_name'], $new_location);

		$update_image = "UPDATE latest_blog SET banner_image='$banner_name' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "Post has been created successfully!";
		header('location: add_latest_blog.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_latest_blog.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_latest_blog.php');
}