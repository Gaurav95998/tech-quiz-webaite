<?php
session_start();

if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header("location: signup.php");
    exit;
}
session_unset();
session_destroy();

header("location: signup.php");
?>