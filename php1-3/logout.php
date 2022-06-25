<?php
session_start();
session_destroy();
setcookie('e','',time()-90);
header('location:sign-in.php');
?>