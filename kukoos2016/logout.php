<?php
ob_start();
session_start();

unset($_SESSION['admin_username']);
unset($_SESSION['admin_userid']);
unset($_SESSION['admin_status']);
session_destroy();
header("location:index.php");
?>