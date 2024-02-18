<?php 
session_start();
require '../db.php';
require '../session.php';

$nick_name = $_POST['nick_name'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$designation = mysqli_real_escape_string($db_connect, $_POST['designation']);
$profile_image = $_FILES['profile_image'];

$after_explode = explode('.', $profile_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($profile_image['size'] < 5000000){
		$insert = "INSERT INTO team_member(nick_name, first_name, last_name, designation) VALUES('$nick_name','$first_name','$last_name','$designation')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$team_member_name = "team_member".$id.".".$extension;
		$new_location = 'uploaded/'.$team_member_name;
		move_uploaded_file($profile_image['tmp_name'], $new_location);

		$update_image = "UPDATE team_member SET profile_image='$team_member_name' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "Team member has been added successfully!";
		header('location: add_team_member.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_team_member.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_team_member.php');
}