<?php
session_start();

// DESTROYING SESSIONS //
session_destroy();
header('location: login.php');