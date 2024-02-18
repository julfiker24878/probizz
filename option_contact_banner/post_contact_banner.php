<?php 
session_start();
require '../db.php';
require '../session.php';

$title1 = $_POST['title1'];
$title2 = $_POST['title2'];
$btn_text = $_POST['btn_text'];
$contact_banner_image = $_FILES['contact_banner_image'];

$after_explode = explode('.', $contact_banner_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($contact_banner_image['size'] < 5000000){
		$insert = "INSERT INTO contact_banner(title1, title2, btn_text) VALUES('$title1','$title2','$btn_text')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$contact_banner_name = "contact_banner".$id.".".$extension;
		$new_location = 'uploaded/'.$contact_banner_name;
		move_uploaded_file($contact_banner_image['tmp_name'], $new_location);

		$update_image = "UPDATE contact_banner SET contact_banner_image='$contact_banner_name' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "Added successfully!";
		header('location: add_contact_banner.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_contact_banner.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_contact_banner.php');
}