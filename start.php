<?php
session_start();
unset($_SESSION['NAME']);
session_destroy();
require('db.inc.php');
//$_SESSION['logged_in'] == 0;
//header('location:index.php');
?>