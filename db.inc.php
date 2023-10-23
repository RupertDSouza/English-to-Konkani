<?php
session_start();
$con1=mysqli_connect('localhost','root','','language');
$con2=mysqli_connect('localhost','root','','data_info');
//$db1=mysqli_select_db($con1,"sms");
//$db2=mysqli_select_db($con2,"sms");
if ($con1 && $con2 ->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>