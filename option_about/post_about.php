<?php 
session_start();
require '../db.php';
require '../session.php';

$sub_title = $_POST['sub_title'];
$title_red = $_POST['title_red'];
$title_blue = $_POST['title_blue'];
$des = mysqli_real_escape_string($db_connect, $_POST['des']);
$about_image = $_FILES['about_image'];

$after_explode = explode('.', $about_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($about_image['size'] < 5000000){
		$insert = "INSERT INTO about(sub_title, title_red, title_blue, des) VALUES('$sub_title','$title_red','$title_blue','$des')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$about_name = "about".$id.".".$extension;
		$new_location = 'uploaded/'.$about_name;
		move_uploaded_file($about_image['tmp_name'], $new_location);

		$update_image = "UPDATE about SET about_image='$about_name' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "about added successfully!";
		header('location: add_about.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_about.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_about.php');
}