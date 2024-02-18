<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$delete_contact = "DELETE FROM contact WHERE id=$id";
$delete_contact_query = mysqli_query($db_connect, $delete_contact);

$_SESSION['deleted'] = "Deleted Successfully!";
header('location: view_contact.php');