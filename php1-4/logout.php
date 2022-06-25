<?php
session_start();
session_destroy();
setcookie('e','',time()-60*60*24);
header('location:sign-in.php');
?>