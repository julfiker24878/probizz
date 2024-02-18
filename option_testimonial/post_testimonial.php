<?php 
session_start();
require '../db.php';
require '../session.php';

$review = $_POST['review'];
$comment = mysqli_real_escape_string($db_connect, $_POST['comment']);
$name = $_POST['name'];
$designation = mysqli_real_escape_string($db_connect, $_POST['designation']);
$profile_image = $_FILES['profile_image'];

$after_explode = explode('.', $profile_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($profile_image['size'] < 5000000){
		$insert = "INSERT INTO testimonial(review, comment, name, designation) VALUES('$review','$comment','$name','$designation')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$testimonial_name = "testimonial".$id.".".$extension;
		$new_location = 'uploaded/'.$testimonial_name;
		move_uploaded_file($profile_image['tmp_name'], $new_location);

		$update_image = "UPDATE testimonial SET profile_image='$testimonial_name' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "Added successfully!";
		header('location: add_testimonial.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_testimonial.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_testimonial.php');
}