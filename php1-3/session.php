<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:sign-in.php');
}
?>
