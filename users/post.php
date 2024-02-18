<?php
session_start();
require '../db.php';

// SETTING UP ERRORS FOR EMPTY FIELD //
$errors = [];
$field_names = ['name'=>'Please enter your name', 'email'=>'Please enter your email address', 'password'=>'Please enter a password', 'cpassword'=>'Please confirm your password'];

// FOREACH LOOP //
foreach($field_names as $field_name=>$msg){
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $msg;
    }
}

// FORM VALIDATION //
if(count($errors) == 0){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $role = $_POST['role'];
    $upper = preg_match('@[A-Z]@', $password);
    $lower = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $special = preg_match('@[^ \w]@', $password);
    date_default_timezone_set('Asia/Dhaka');
    $registered_at = date('Y-m-d h:i:s');

    // COUNTING EXIST EMAIL //
    $select_email = "SELECT count(*) as email_exist from users WHERE email='$email' ";
    $select_email_result = mysqli_query($db_connect, $select_email);
    $after_assoc = mysqli_fetch_assoc($select_email_result);

    if(strlen($name) > 100){
        $_SESSION['large_name'] = "Please enter a valid name!";
        header('location: add_user.php');
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['invalid_email'] = "Please enter a valid email address!";
        header('location: add_user.php');
    }/*elseif(!$upper || !$lower || !$number || !$special || strlen($password) < 8){
        $_SESSION['wk_pass'] = "Please enter a strong password!";
        header('location: add_user.php');
    }elseif($password != $cpassword){
        $_SESSION['pass_match'] = "Password doesn't matched!";
        header('location: add_user.php');
    }*/elseif($after_assoc['email_exist'] == 1){
        $_SESSION['email_exists'] = "Email already exist!";
        header('location: add_user.php');
        }else{
            $hashpassword = password_hash($password, PASSWORD_DEFAULT);
            $hashcpassword = password_hash($cpassword, PASSWORD_DEFAULT);

            $profile_image = $_FILES['profile_image'];
            $image_file = $profile_image['name'];
            $after_explode = explode('.', $image_file);
            $extension = end($after_explode);
            $allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'svg', 'PNG', 'JPG', 'JPEG');

            // CONDITION FOR ALLOWED EXTENSIONS //
            if(in_array($extension, $allowed_extension)){

                // CONDITION FOR IMAGE LARGE SIZE //
                if($profile_image['size'] < 800000){

                    // INSERT QUERY FOR USERS TABLE //
                    $insert = "INSERT INTO users(name, email, role, password, registered_at) VALUES('$name','$email', '$role', '$hashpassword','$registered_at')";
                    $insert_result = mysqli_query($db_connect, $insert);

                    // CREATING IMAGE NAME AND LOCATION //
                    $id = mysqli_insert_id($db_connect);
                    $image_name = $id.'.'.$extension;
                    $new_location = 'uploaded/'.$image_name;
                    move_uploaded_file($profile_image['tmp_name'], $new_location);

                    // UPDATE QUERY FOR PROFILE IMAGE //
                    $update_image = "UPDATE users SET profile_image='$image_name' WHERE id=$id ";
                    $update_image_result = mysqli_query($db_connect, $update_image);

                    // SESSION FOR SUCCESS //
                    $_SESSION['success'] = "Sign up successful!";
                    header('location: add_user.php');

                }else{
                    // SESSION FOR IMAGE LARGE SIZE //
                    $_SESSION['invalid_size'] = "File size too large!";
                    header('location: add_user.php');
                }

            }else{
                // SESSION FOR IMAGE INVALID EXTENSIONS //
                $_SESSION['invalid_extension'] = "Invalid Extension!";
                header('location: add_user.php');
            }
        }
}else{
    // SESSION FOR EMPTY ERROR FIELDS //
    $_SESSION['err'] = $errors;
    header('location: add_user.php');
}

