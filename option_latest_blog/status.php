<?php
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$select_banner = "SELECT * FROM banner WHERE id=$id";
$select_banner_resutl = mysqli_query($db_connect, $select_banner);
$after_assoc = mysqli_fetch_assoc($select_banner_resutl);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE banner SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location: view_banner.php');

}else{
    $update_status1 = "UPDATE banner SET status=0";
    $update_status1_result = mysqli_query($db_connect, $update_status1);

    $update_status = "UPDATE banner SET status=1 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location: view_banner.php');
}