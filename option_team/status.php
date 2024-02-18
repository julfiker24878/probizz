<?php
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$select_team_member = "SELECT * FROM team_member WHERE id=$id";
$select_team_member_resutl = mysqli_query($db_connect, $select_team_member);
$after_assoc = mysqli_fetch_assoc($select_team_member_resutl);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE team_member SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location: view_team_member.php');

}else{
    $update_status = "UPDATE team_member SET status=1 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location: view_team_member.php');
}