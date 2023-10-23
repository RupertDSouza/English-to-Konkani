<?php
require('db.inc.php');
?>
<html>
<body>
<form action="" method="POST">
<input type="submit" name="submitbutton" id="submitbutton"/>
</form> 
<?php 
if(isset($_POST['submitbutton'])){
unset($_POST['submitbutton']);
$_POST['submitbutton']=1;
$save=$_POST['submitbutton'];
echo $save;
}
?>
</body>
</html>