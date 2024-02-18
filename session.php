<?php

if(!isset($_SESSION['login_done'])){
    header('location: /probizz/login/login.php');
}