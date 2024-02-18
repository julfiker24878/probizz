<?php
session_start();
require '../db.php';

if(isset($_POST['signup'])){
    $_SESSION['forbidden'] = "Please contact with admin to add you!";
    header('location: login.php');
}else{
    // RECEIVING NAME FIELDS //
    $email = $_POST['email'];
    $password = $_POST['password'];

    // COUNTING EMAIL IN DATABASE //
    $select = "SELECT count(*) as email_exist FROM users WHERE email='$email' ";
    $select_result = mysqli_query($db_connect, $select);
    $after_assoc = mysqli_fetch_assoc($select_result);

    // CONDITION FOR EXIST EMAILS //
    if($after_assoc['email_exist'] == 1){
        $select = "SELECT * FROM users WHERE email='$email' ";
        $select_result = mysqli_query($db_connect, $select);
        $after_assoc = mysqli_fetch_assoc($select_result);

        // VERIFYING PASSWORD AND DECLARING SESSIONS //
        if(password_verify($password, $after_assoc['password'])){
            $_SESSION['sweet_done'] = "okay!";
            $_SESSION['login_done'] = "okay!";
            $_SESSION['username'] = $after_assoc['name'];
            $_SESSION['user_email'] = $after_assoc['email'];
            $_SESSION['user_profile'] = $after_assoc['profile_image'];
            $_SESSION['user_role'] = $after_assoc['role'];
            $_SESSION['user_id'] = $after_assoc['id'];
            header('location: ../admin.php');
        }else{
            // PASSWORD UNMANTCHED RESULT //
            $_SESSION['password_unmatched'] = "Password doesn't matched!";
            header('location: login.php');
        }
    }else{
        // EMAIL UNMATCHED RESULT //
        $_SESSION['email_not_exist'] = "Email doesn't matched!";
        header('location: login.php');
    }
}