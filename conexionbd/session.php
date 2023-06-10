<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['user_dni'])) {
    echo "<script> window.location='../../login.php'; </script>";
}
?>
