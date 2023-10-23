<?php
require('db.inc.php');
unset($_SESSION['NAME']);
session_destroy();
header('location:index.php');
?>