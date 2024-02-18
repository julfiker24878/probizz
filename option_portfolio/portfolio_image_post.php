<?php 
session_start();
require '../db.php';
require '../session.php';

$all_selected = $_POST['all_selected'];
$tab_name = implode(" ", $all_selected);

$image = $_FILES['image'];

$after_explode = explode('.', $image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($image['size'] < 5000000){
		$insert = "INSERT INTO portfolio_image(all_selected) VALUES('$tab_name')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$portfolio_image = "portfolio_image".$id.".".$extension;
		$new_location = 'uploaded/'.$portfolio_image;
		move_uploaded_file($image['tmp_name'], $new_location);

		$update_image = "UPDATE portfolio_image SET image='$portfolio_image' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "Image added successfully!";
		header('location: add_portfolio_image.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_portfolio_image.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_portfolio_image.php');
}