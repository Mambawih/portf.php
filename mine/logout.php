<?php
session_start();
include('../function.php');
unset($_SESSION['ADMIN_LOGIN']);
unset($_SESSION['ADMIN_ID']);
unset($_SESSION['ADMIN_USERNAME']);
redirect('login.php');
?>