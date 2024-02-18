<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$select_three_col = "SELECT * FROM three_col WHERE id=$id";
$select_three_col_resutl = mysqli_query($db_connect, $select_three_col);
$after_assoc = mysqli_fetch_assoc($select_three_col_resutl);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE three_col SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location: view_three_col.php');

}else{
    $select_status = "SELECT count(*) as active_status FROM three_col WHERE status=1";
    $status_query = mysqli_query($db_connect, $select_status);
    $status_assoc = mysqli_fetch_assoc($status_query);

    if($status_assoc['active_status'] == 3){
        $_SESSION['failed'] = "Maximum 3 active Feature!";
        header('location: view_three_col.php');
    }else{
        $update_status = "UPDATE three_col SET status=1 WHERE id=$id";
        $update_status_result = mysqli_query($db_connect, $update_status);
        header('location: view_three_col.php');
    }
}