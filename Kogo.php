<?php
require('db.inc.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
        <!-- CSS property to place div
            side by side -->
        <style>
            .center {
                margin: auto;
                width: 800px;
                height:300px;
                border: 3px solid #73AD21;
                background:#140a57;
                padding:40px;
            }
            #leftbox {
                float:left;
                padding:15px;
                width:350px;
                height:230px;
            }
            #left {
                float:left;
                width:350px;
                height:230px;
            }
            #middlebox{
                margin:auto;
                padding:15px;
                width:100px;
                height:300px;
            }
            #middle{
                margin:auto;
                width:100px;
                height:50px;
            }
            #rightbox{
                float:right;
                padding:15px;
                width:350px;
                height:230px;
            }
            #right{
                float:right;
                width:350px;
                height:230px;
            }
        </style>
</head>
<body>
        
            <div>
            <table>
                <th class="head" colspan="10">
                    KOGO
                </th>
                <form method="post">
                <tr>
        <td class="sub">ENGLISH</td>
        <td></td>
        <td class="sub">KONKANI</td>
    </tr>
<div>
  <tr>
    <td>
    <div id = "leftbox">
    <textarea id = "left" type="text" name="eng" id="eng"
                        value="<?php 
                        $eng = addslashes($eng);
                        if(isset($_POST['eng']) == false){
                                $eng = "";}
                                else{
                                $eng = mysqli_real_escape_string($con1,$_POST['eng']);
                                } ?>"><?php $eng=stripslashes("$eng");
                                            echo $eng;?></textarea>
    </div>
    </td>
    <td>
    <div id = "middlebox">
        <div id="middle"></div>
        <div id="middle"></div>
        <div id="middle"></div>
        <div id="middle"></div>
        <div id="middle"></div>
        <button id="middle" type="submit" type="submit" value="SUBMIT" id="submit">Submit</button>
    </div>
    </td>

   </form>
            <?php
                    
                    function ifInDatabase1($sentence,$kon) {
                                    //foreach($wrd as $key) {
                                        if(in_array($sentence,$kon)) {
                                            global $kn1;
                                            array_push($kn1, $sentence);
                                        }
                                        return $kn1;
                                    //}
                                }
                                
                                function ifInDatabase2($sentences,$kon){
                                    $wordArray = array($sentences);
                                    foreach($wordArray as $key => $wrd) {
                                        if(in_array($sentences,$kon)) {
                                            global $kn1;
                                            array_push($kn1, $wrd);
                                        }
                                        return $kn1;
                                    }
                                }

                                function addToArray($sentences){
                                    $wordArray = array($sentences);
                                    foreach($wordArray as $key => $wrd) {
                                            global $kn1;
                                            array_push($kn1, $wrd);
                                    }
                                    return $kn1;
                                }

//.......................................................................................

                $Interrogative = array(); 

            $sql="SELECT Eng FROM `eng-kon` WHERE gramtyp='Interrogative'";
            $result = $con1->query($sql) or die($con1->error);
            if ($result->num_rows > 0){
                while($rows=$result->fetch_assoc()){
                    $ques = $rows['Eng'];
                    array_push($Interrogative , $ques); 
                }
            }

                $verb = array();

            $sql="SELECT Eng FROM `eng-kon` WHERE gramtyp='verb'";
            $result = $con1->query($sql) or die($con1->error);
            if ($result->num_rows > 0){
                while($rows=$result->fetch_assoc()){
                    $vrb = $rows['Eng'];
                    array_push($verb , $vrb);
                }
            }

                $verbs = array(
                    'are',
                    'were'
                );

                function quesinTheMiddle($kn1,$Interrogative) {
                    foreach($kn1 as $key => $wrd) {
                        if(in_array($wrd,$Interrogative)) {
                            unset($kn1[$key]);
                            $kn1[] = $wrd;
                        }
                    }
                    return $kn1;
                }

                function verbbfoverbs($Ques,$verb) {
                    foreach($Ques as $key => $wrd) {
                        if(in_array($wrd,$verb)) {
                            unset($Ques[$key]);
                            $Ques[] = $wrd;
                        }
                    }
                    return $Ques;
                }

                function verbsInTheEnd($sentcs,$verbs) {
                    foreach($sentcs as $key => $wrd) {
                        if(in_array($wrd,$verbs)) {
                            unset($sentcs[$key]);
                            $sentcs[] = $wrd;
                        }
                    }
                    return $sentcs;
                }

                $pattern = '/([,\s:\s"\s!\s?\s.])/';
                $components = preg_split($pattern, $eng, -1, PREG_SPLIT_DELIM_CAPTURE);
$new = array();
$new1 = array();
$newarray = array();
$theword = array();
                foreach ($components as $word){
                    if ($word=="," OR $word==":" OR $word=='"' OR $word=="!" OR $word=="?" OR $word=="."){
                        if(!empty($new1)){
                            $newarray = array();
                            array_push($newarray, $new1[$x - 1]);
                            array_push($theword, ...$newarray);
                            $newarray = array();
                            $new1 = array();
                        }else{
                            array_push($theword, ...$newarray);
                            $newarray = array();
                        }                   
                    array_push($theword, $word);
                        $new = array();
                    }elseif($word == " " OR empty($word)){
                        continue;
                    }else{
                        array_push($new, $word);
                        $newarray = array();
                        array_push($newarray, ...$new);
                    if(count($new) >= 2){
                        $nwrd= implode(' ',$new);
                        array_push($new1, $nwrd);
                        $x = count($new1); 
                    }   
                }
            }
            if(count($newarray) > 1){
                array_push($theword, ...$new1);
            }else{
                array_push($theword, ...$new);
            }
            $new = array();
            //print_r($theword);
                                                    //                 print_r($theword);
                                                    //                 echo '<br />';
    // ----------------------------------------------------------------------------------

                foreach ($theword as $key => $wrd1) {
                    $words = explode(' ', $wrd1);
                    //print_r($words);

                    $cunt = count($words);
                    $kon = array();
                    $kn1 = array();

                for ($i=1;$i<=$cunt;$i++){
                    $kn2 = array();
                    //foreach ($words as $word){
                        foreach (array_slice($words,$i-1) as $word) {
                        array_push($kn2, $word);
                        if (count($kn2) >= 2){
                            $wrd = implode(' ', $kn2);
                            //echo "(" ,$wrd, ")";
                            $sql="SELECT Eng FROM `eng-kon` WHERE Eng='$wrd'";
                            $result = $con1->query($sql) or die($con1->error);
                                if ($result->num_rows > 0){
                                    unset($kn1[$i-1]);
                                    $rows=$result->fetch_assoc();
                                    array_push($kon , $rows['Eng']);
                                    $sentence = strtolower($wrd);
                                    $Ques = ifInDatabase1($sentence,$kon);
                                    $i++;
                                }
                        }else{
                                $sql="SELECT Eng FROM `eng-kon` WHERE Eng='$word'";
                                $result = $con1->query($sql) or die($con1->error);
                                if ($result->num_rows > 0){
                                    $rows=$result->fetch_assoc();
                                    array_push($kon , $rows['Eng']);
                                    $sentences = strtolower($word);
                                    $Ques = ifInDatabase2($sentences,$kon);
                                }else{
                                    $sentences = strtolower($word);
                                    $Ques = addToArray($sentences);
                                }
                            }
                        }
                    }
                 
                $Ques = quesinTheMiddle($kn1,$Interrogative);
                $sentcs = verbbfoverbs($Ques,$verb);
                $trans = verbsInTheEnd($sentcs,$verbs);
//Outputs "you guys great are"

            $nottobeadded = array('is','the','did');

                    $cunt = count($trans);
                    $kon = array();
                    $kn1 = array();

                for ($i=1;$i<=$cunt;$i++){
                    $kn2 = array();
                    //foreach ($words as $word){
                        foreach (array_slice($trans,$i-1) as $word) {
                        array_push($kn2, $word);
                        if (count($kn2) >= 2){
                            $wrd = implode(' ', $kn2);
                            //echo "(" ,$wrd, ")";
                            $sql="SELECT Eng FROM `eng-kon` WHERE Eng='$wrd'";
                            $result = $con1->query($sql) or die($con1->error);
                                if ($result->num_rows > 0){
                                    unset($kn1[$i-1]);
                                    $rows=$result->fetch_assoc();
                                    array_push($kon , $rows['Eng']);
                                    $sentence = strtolower($wrd);
                                    $newsent = ifInDatabase1($sentence,$kon);
                                    $i++;
                                }
                        }else{
                                $sql="SELECT Eng FROM `eng-kon` WHERE Eng='$word'";
                                $result = $con1->query($sql) or die($con1->error);
                                if ($result->num_rows > 0){
                                    $rows=$result->fetch_assoc();
                                    array_push($kon , $rows['Eng']);
                                    $sentences = strtolower($word);
                                    $newsent = ifInDatabase2($sentences,$kon);
                                }else{
                                    $sentences = strtolower($word);
                                    $newsent = addToArray($sentences);
                                }
                            }
                        }
                    }

                        foreach ($newsent as $word) {
                            $sql="SELECT * FROM `eng-kon` WHERE Eng='$word'";
                            $result = $con1->query($sql) or die($con1->error);
                            if ($result->num_rows > 0){
                                $row=$result->fetch_assoc();
                                array_push($new , $row['Kon']);
                                }
                                elseif(in_array($word,$nottobeadded)) {
                                    continue;
                                }else{
                                    array_push($new , $word);
                                }
                            }
                            while($rows=$result->fetch_assoc()){
                                echo $rows['Kon'];
                                echo " ";
                                }
                            }
            ?>
                <td>
    <div id = "rightbox">
    <textarea id = "right">
        <?php
            $print = implode(' ', $new);
                echo $print;
        ?>
    </textarea>
    </div>
    </td>
  </tr>
</div>
      </table>
</div>
<footer>
    Translation
</footer>
</body>
</html>