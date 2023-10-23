<?php
require('db.inc.php');
    if(isset($_POST['table']) &&isset($_POST['add_eng']) && isset($_POST['add_kon']) && isset($_POST['gram_type'])){
        echo "hai";
    $table=mysqli_real_escape_string($con1,$_POST['table']);
    $add_eng=mysqli_real_escape_string($con1,$_POST['add_eng']);
    $add_kon=mysqli_real_escape_string($con1,$_POST['add_kon']);
    $gram_type=mysqli_real_escape_string($con1,$_POST['gram_type']);
    $res=mysqli_query($con1,"INSERT INTO `a`(`Eng`, `Kon`, `gramtyp`)VALUES ('$add_eng','$add_kon','$gram_type'");

          echo "Added";
        }else{
          echo "not added";
        }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="leaveregno.css">
        <title>Report</title>
    </head>
    <body>
        <form method="post">
            <table>
                <th class="head" colspan="2">LEAVE APPLICATION</th>

                <tr>
                    <td class="sub">Select</td>
                    <td>
                    <select name="table" id="table" style="font-family: Bell MT;" required>
                        <option disabled selected>_Select_</option>       
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    </td>
                    
                </tr>
                <tr>
                    <td class="sub" >ENG</td>
                     <td>
                        <input type="text" name="add_eng" id="add_eng" style="text-transform:uppercase" required></td>
                </tr>
                <tr>
                    <td class="sub">KON</td>
                    <td ><input type="text" name="add_kon" id="add_kon" style="text-transform:uppercase" required></td>
                </tr>
                <tr>
                    <td class="sub" >Grammer</td>
                    <td ><textarea cols=40 rows=13 name="gram_type" id="gram_type" required></textarea></td>
                     <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" value="SUBMIT" id="submit">
                    </td>
                </tr>
             </table>
        </form>
    </body>
</html>

<!--     <form method="post">
            <table>
                <th class="head" colspan="2">LEAVE APPLICATION</th>
                <tr>
                    <td class="sub">YEAR</td>
                    <td>
                    <select id="table" style="font-family: Bell MT;" required>
                        <option disabled selected>_Select_</option>       
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    </td>
                    
                </tr>
                <tr>
                    <td class="sub" >BATCH</td>
                     <td>
                        <input type="text" id="add_eng" style="text-transform:uppercase" required></td>
                </tr>
                <tr>
                    <td class="sub">COURSE</td>
                    <td ><input type="text" id="add_kon" style="text-transform:uppercase" required></td>
                </tr>
                <tr>
                    <td class="sub" >REASON OF LEAVE</td>
                    <td ><textarea cols=40 rows=13 name="reason" id="gram_type" required></textarea></td>
                     <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" value="SUBMIT" id="submit">
                    </td>
                </tr>
             </table>
        </form> -->