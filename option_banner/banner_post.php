<?php 
session_start();
require '../db.php';
require '../session.php';

$heading = $_POST['heading'];
$description = $_POST['description'];
$btn1_text = $_POST['btn1_text'];
$btn1_link = $_POST['btn1_link'];
$btn2_text = $_POST['btn2_text'];
$btn2_link = $_POST['btn2_link'];
$banner_image = $_FILES['banner_image'];

$after_explode = explode('.', $banner_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($banner_image['size'] < 5000000){
		$insert = "INSERT INTO banner(heading, description, btn1_text, btn1_link, btn2_text, btn2_link) VALUES('$heading','$description','$btn1_text','$btn1_link','$btn2_text','$btn2_link')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$banner_name = "banner".$id.".".$extension;
		$new_location = 'uploaded/'.$banner_name;
		move_uploaded_file($banner_image['tmp_name'], $new_location);

		$update_image = "UPDATE banner SET banner_image='$banner_name' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "Banner added successfully!";
		header('location: add_banner.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_banner.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_banner.php');
}