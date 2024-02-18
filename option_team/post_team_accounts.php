<?php 
session_start();
require '../db.php';
require '../session.php';

$member_id = $_POST['member_id'];
$account_name = $_POST['account_name'];
$icon = $_POST['icon'];
$link = $_POST['link'];

$insert = "INSERT INTO team_accounts(member_id, account_name, icon, link) VALUES('$member_id','$account_name','$icon','$link')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Added successfully!";
header('location: add_team_accounts.php');