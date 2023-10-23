<?php
require('../db.inc.php');//php_flag opcache.enable Off;
?>
<html>

<head>
    <title>KOGO - Start translating today!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../images/KOGO Title Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/trynowstyles(1).css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div>
            <img src="../../images/icon_removebg.png" alt="logo" class="logo" a onClick="location.href='../../'">
            <nav>
                <ul>
                    <li><a style="cursor: pointer;" onClick="location.href='../../'">HOME</a></li>
                    <li><a style="cursor: pointer;" onClick="location.href='./features.php'">FEATURES</a></li>
                    <li><a style="cursor: pointer;" onClick="location.href='./aboutus.php'">ABOUT US</a></li>
                    <?php 
                    if($_SESSION['logged_in'] == 1){ ?>
                        <li style='color:#2B7FE0;'>
                        <?php if($_SESSION['ROLE']==1){ ?>
                            <a href='../Admin/'>
                            <?php echo $_SESSION['NAME']; ?>
                            <a>
                            <?php 
                            }else{echo $_SESSION['NAME'];} ?> </li>
                        <li><button class="login" onClick="location.href='../Log/out'">LOGOUT</a></button></li>
                    <?php }else{;?>
                        <li><button class="login" onClick="location.href='../Log/in'">LOGIN</button></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
        </div>
    </header>
    <div class="parent"><div>
        <p class="konkanitext" align="center">English</p>
    </div>
    <div>
        <p class="konkanitext2" align="center">Konkani</p>
    </div>
</div>
    <section>
    <a class="rounded-mic" alt="microphone" onclick="speaktotext()">
        <ion-icon name="mic" size="large"></ion-icon>
    </a>
    <form method="post" class="words" contenteditable>
     <textarea placeholder="Enter your text here!" type="text" name="eng" id="eng"
            value="<?php 
                    //$eng = addslashes($eng);
                    if(isset($_POST['eng']) == false){
                        $eng = "";}
                    else{
                        $eng = mysqli_real_escape_string($con1,$_POST['eng']);
                    } ?>"><?php $eng=stripslashes("$eng");
                            echo $eng;?></textarea>
    <button class="KOGOb">KOGO</button>
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
                $pronoun = array(); 

            $sql="SELECT Eng FROM `all_words` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_a` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_b` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_c` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_d` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_e` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_f` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_g` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_h` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_i` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_j` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_k` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_l` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_m` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_n` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_o` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_p` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_q` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_r` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_s` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_t` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_u` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_v` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_w` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_x` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_y` WHERE gramtyp='pronoun'
                  UNION
                  SELECT Eng FROM `table_z` WHERE gramtyp='pronoun'";
            $result = $con1->query($sql) or die($con1->error);
            if ($result->num_rows > 0){
                while($rows=$result->fetch_assoc()){
                    $first = $rows['Eng'];
                    array_push($pronoun, $first); 
                }
            } 

 $noun = array(); 

            $sql="SELECT Eng FROM `all_words` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_a` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_b` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_c` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_d` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_e` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_f` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_g` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_h` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_i` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_j` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_k` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_l` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_m` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_n` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_o` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_p` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_q` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_r` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_s` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_t` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_u` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_v` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_w` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_x` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_y` WHERE gramtyp='noun'
                  UNION
                  SELECT Eng FROM `table_z` WHERE gramtyp='noun'";
            $result = $con1->query($sql) or die($con1->error);
            if ($result->num_rows > 0){
                while($rows=$result->fetch_assoc()){
                    $second = $rows['Eng'];
                    array_push($noun, $second); 
                }
            }

                $adverb = array(); 

            $sql="SELECT Eng FROM `all_words` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_a` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_b` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_c` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_d` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_e` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_f` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_g` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_h` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_i` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_j` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_k` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_l` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_m` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_n` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_o` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_p` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_q` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_r` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_s` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_t` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_u` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_v` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_w` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_x` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_y` WHERE gramtyp='adverb'
                  UNION
                  SELECT Eng FROM `table_z` WHERE gramtyp='adverb'";
            $result = $con1->query($sql) or die($con1->error);
            if ($result->num_rows > 0){
                while($rows=$result->fetch_assoc()){
                    $adwrd = $rows['Eng'];
                    array_push($adverb, $adwrd); 
                }
            }

                $Interrogative = array(); 

            $sql="SELECT Eng FROM `all_words` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_a` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_b` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_c` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_d` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_e` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_f` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_g` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_h` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_i` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_j` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_k` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_l` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_m` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_n` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_o` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_p` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_q` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_r` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_s` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_t` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_u` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_v` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_w` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_x` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_y` WHERE gramtyp='Interrogative'
                  UNION
                  SELECT Eng FROM `table_z` WHERE gramtyp='Interrogative'";
            $result = $con1->query($sql) or die($con1->error);
            if ($result->num_rows > 0){
                while($rows=$result->fetch_assoc()){
                    $ques = $rows['Eng'];
                    array_push($Interrogative , $ques); 
                }
            }

                $verb = array();

            $sql="SELECT Eng FROM `all_words` WHERE gramtyp='verb'
                                    UNION
                  SELECT Eng FROM `table_a` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_b` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_c` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_d` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_e` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_f` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_g` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_h` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_i` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_j` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_k` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_l` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_m` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_n` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_o` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_p` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_q` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_r` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_s` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_t` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_u` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_v` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_w` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_x` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_y` WHERE gramtyp='verb'
                  UNION
                  SELECT Eng FROM `table_z` WHERE gramtyp='verb'";
            $result = $con1->query($sql) or die($con1->error);
            if ($result->num_rows > 0){
                while($rows=$result->fetch_assoc()){
                    $vrb = $rows['Eng'];
                    array_push($verb , $vrb);
                }
            }

                $thrid_pr_verb = array();

            $sql="SELECT Eng FROM `all_words` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_a` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_b` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_c` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_d` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_e` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_f` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_g` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_h` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_i` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_j` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_k` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_l` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_m` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_n` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_o` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_p` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_q` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_r` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_s` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_t` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_u` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_v` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_w` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_x` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_y` WHERE gramtyp='3pr_verb'
                  UNION
                  SELECT Eng FROM `table_z` WHERE gramtyp='3pr_verb'";
            $result = $con1->query($sql) or die($con1->error);
            if ($result->num_rows > 0){
                while($rows=$result->fetch_assoc()){
                    $pr_vrb = $rows['Eng'];
                    array_push($thrid_pr_verb , $pr_vrb);
                }
            }

                $verbs = array('are','were','decide','decided');

                function pronouninTheBeginning($main,$pronoun) {
                    foreach($main as $key => $wrd) {
                        if(in_array($wrd,$pronoun)) {
                            unset($main[$key]);
                            array_unshift($main,$wrd);
                        }
                    }
                    return $main;
                }

                function nounAfterpronoun($start,$noun) {
                    foreach($start as $key => $wrd) {
                        if(in_array($wrd,$noun)) {
                            unset($start[$key]);
                            array_unshift($start,$wrd);
                        }
                    }
                    return $start;
                }

                function adverbAfternoun($kn1,$adverb) {
                    foreach($kn1 as $key => $wrd) {
                        if(in_array($wrd,$adverb)) {
                            unset($kn1[$key]);
                            array_unshift($kn1,$wrd);
                        }
                    }
                    return $kn1;
                }

                function quesinTheMiddle($conti,$Interrogative) {
                    foreach($conti as $key => $wrd) {
                        if(in_array($wrd,$Interrogative)) {
                            unset($conti[$key]);
                            $conti[] = $wrd;
                        }
                    }
                    return $conti;
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

                
                function prverbInTheEnd($trans,$thrid_pr_verb) {
                    foreach($trans as $key => $wrd) {
                        if(in_array($wrd,$thrid_pr_verb)) {
                            unset($trans[$key]);
                            $trans[] = $wrd;
                        }
                    }
                    return $trans;
                }

                $pattern = '/([,\s:\s"\s!\s?\s.\'])/';
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
                array_push($theword, $new1[$x - 1]);

            }else{
                array_push($theword, ...$new);
            }
            $new = array(); //print_r($theword);

    // ----------------------------------------------------------------------------------

                foreach ($theword as $key => $wrd1) {
                    $kon = array();
                    $kn1 = array();

            $sql="SELECT Eng FROM `all_words` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_a` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_b` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_c` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_d` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_e` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_f` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_g` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_h` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_i` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_j` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_k` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_l` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_m` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_n` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_o` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_p` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_q` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_r` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_s` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_t` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_u` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_v` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_w` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_x` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_y` WHERE Eng='$wrd1'
                  UNION
                  SELECT Eng FROM `table_z` WHERE Eng='$wrd1'";
                    $result = $con1->query($sql) or die($con1->error);
                        if ($result->num_rows > 0){
                                //unset($kn1[1]);
                            $rows=$result->fetch_assoc();
                            array_push($kon , $rows['Eng']);
                            $sentence = strtolower($wrd1);
                            $final = ifInDatabase1($sentence,$kon);
                        }else{
                    $words = explode(' ', $wrd1);
                    $cunt = count($words);

                for ($i=1;$i<=$cunt;$i++){
                    $kn2 = array();
                        foreach (array_slice($words,$i-1) as $word) {
                        array_push($kn2, $word);
                        if (count($kn2) >= 2){
                            $wrd = implode(' ', $kn2);
            $sql="SELECT Eng FROM `all_words` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_a` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_b` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_c` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_d` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_e` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_f` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_g` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_h` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_i` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_j` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_k` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_l` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_m` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_n` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_o` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_p` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_q` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_r` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_s` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_t` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_u` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_v` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_w` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_x` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_y` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_z` WHERE Eng='$wrd'";
                            $result = $con1->query($sql) or die($con1->error);
                                if ($result->num_rows > 0){
                                    unset($kn1[$i-1]);
                                    $rows=$result->fetch_assoc();
                                    array_push($kon , $rows['Eng']);
                                    $sentence = strtolower($wrd);
                                    $start = ifInDatabase1($sentence,$kon);
                                    $i++;
                                }else{
                                    continue;
                                }
                        }else{
            $sql="SELECT Eng FROM `all_words` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_a` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_b` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_c` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_d` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_e` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_f` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_g` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_h` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_i` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_j` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_k` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_l` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_m` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_n` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_o` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_p` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_q` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_r` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_s` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_t` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_u` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_v` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_w` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_x` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_y` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_z` WHERE Eng='$word'";
                                $result = $con1->query($sql) or die($con1->error);
                                if ($result->num_rows > 0){
                                    $rows=$result->fetch_assoc();
                                    array_push($kon , $rows['Eng']);
                                    $sentences = strtolower($word);
                                    $start = ifInDatabase2($sentences,$kon);

                                }else{
                                    $sentences = strtolower($word);
                                    $start = addToArray($sentences);
                                }
                            }
                        }
                    }
                    //print_r($kn1);
                $start = adverbAfternoun($kn1,$adverb);
                $main = nounAfterpronoun($start,$noun);
                $conti = pronouninTheBeginning($main,$pronoun);
                $Ques = quesinTheMiddle($conti,$Interrogative);
                $sentcs = verbbfoverbs($Ques,$verb);
                $trans = verbsInTheEnd($sentcs,$verbs);
                $final = prverbInTheEnd($trans,$thrid_pr_verb);
//Outputs "you guys great are"
            $nottobeadded = array('is','the','did');

                    $cunt = count($final);
                    $kon = array();
                    $kn1 = array();

                for ($i=1;$i<=$cunt;$i++){
                    $kn2 = array();
                    //foreach ($words as $word){
                        foreach (array_slice($final,$i-1) as $word) {
                        array_push($kn2, $word);
                        if (count($kn2) >= 2){
                            $wrd = implode(' ', $kn2);
            $sql="SELECT Eng FROM `all_words` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_a` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_b` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_c` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_d` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_e` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_f` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_g` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_h` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_i` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_j` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_k` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_l` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_m` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_n` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_o` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_p` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_q` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_r` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_s` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_t` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_u` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_v` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_w` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_x` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_y` WHERE Eng='$wrd'
                  UNION
                  SELECT Eng FROM `table_z` WHERE Eng='$wrd'";
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
            $sql="SELECT Eng FROM `all_words` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_a` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_b` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_c` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_d` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_e` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_f` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_g` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_h` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_i` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_j` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_k` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_l` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_m` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_n` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_o` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_p` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_q` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_r` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_s` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_t` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_u` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_v` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_w` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_x` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_y` WHERE Eng='$word'
                  UNION
                  SELECT Eng FROM `table_z` WHERE Eng='$word'";
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
                $start = adverbAfternoun($kn1,$adverb);
                $main = nounAfterpronoun($start,$noun);
                $conti = pronouninTheBeginning($main,$pronoun);
                $Ques = quesinTheMiddle($conti,$Interrogative);
                $sentcs = verbbfoverbs($Ques,$verb);
                $trans = verbsInTheEnd($sentcs,$verbs);
                $final = prverbInTheEnd($trans,$thrid_pr_verb);
                }
                        foreach ($final as $word) {
            $sql="SELECT Kon FROM `all_words` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_a` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_b` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_c` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_d` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_e` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_f` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_g` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_h` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_i` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_j` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_k` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_l` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_m` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_n` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_o` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_p` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_q` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_r` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_s` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_t` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_u` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_v` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_w` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_x` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_y` WHERE Eng='$word'
                  UNION
                  SELECT Kon FROM `table_z` WHERE Eng='$word'";
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
                            //while($rows=$result->fetch_assoc()){ //"if there are extra words for one word"
                                //echo $rows['Kon'];
                                //echo " ";
                                //}
                            }
            ?>
    <form method="post">
    <textarea placeholder="Your translated text here!" class="textarea2" id = "right"><?php $print=implode(' ', $new);echo $print; ?></textarea>
    <a class="rounded-spkr" href="" alt="speaker" onclick="myFunction()" name="intxt">
        <ion-icon name="volume-high" size="large"></ion-icon>
      </a>
      <p id="outext"></p>
  </form>

</section>
<?php
    if(isset($_SESSION['NAME']) && $eng!=="" && $print!==""){
        $sql="SELECT * FROM `history` WHERE username='{$_SESSION['NAME']}'AND Eng='$eng' AND Kon='$print'";
        $result = $con2->query($sql) or die($con2->error);
        if ($result->num_rows > 0){
            // echo "";
                }else{
    $res=mysqli_query($con2,"INSERT INTO `history`(`username`, `Eng`, `Kon`) 
        VALUES ('{$_SESSION['NAME']}','$eng','$print')");
        } 
    }   ?>
<section>
    <div><centre>
        <!--<button class="btbutton"><img src="historytrynow.png" alt="History" class="icons" /></button>
        <p id="iconlabel">History</p>-->

<!-- Trigger/Open The Modal -->
<button id="myBtn" class="btbutton"><img src="../../images/historytrynow.png" alt="History" class="icons" /></button>
        <p id="iconlabel">History</p>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>History</h2>
    </div>
    <?php
    if ($_SESSION['logged_in'] == 1) {
    $sqlnew="SELECT * FROM `history` WHERE `username`='".$_SESSION['NAME']."'";
            $result = $con2->query($sqlnew) or die($con2->error);
            if ($result->num_rows > 0){
                    while($row = $result -> fetch_assoc()){
        ?>
    <div class="modal-body">
    
      <p> <?php
      echo $row['Eng']  ." - ".  $row['Kon'];} } 
    }else{
      ?></p>
      <p><?php echo "You must login to view the history of your translations"; } ?></p>
    </div>
  </div>

</div></section>
<section>
<?php
    if($_SESSION['logged_in'] == 1){ ?>
<button onClick="location.href='./discusskogo.php'" class="btbutton3"><img src="../../images/communitytrynow.png" alt="History" class="icons" /></button></centre>
<p id="iconlabel3">Community</p>
<?php }else{ ?>
<button onClick="location.href='../Log/in'" class="btbutton3"><img src="../../images/communitytrynow.png" alt="History" class="icons" /></button></centre>
        <p id="iconlabel3">Community</p>
<?php } ?>
    </div>
</section>

<script type="text/javascript">
function speak(text) {
  // create a SpeechSynthesisUtterance to configure the how text to be spoken 
  let speakData = new SpeechSynthesisUtterance();
    speakData.text = text;
    speakData.lang = 'en';
  
  // pass the SpeechSynthesisUtterance to speechSynthesis.speak to start speaking 
  speechSynthesis.speak(speakData);

}
function myFunction() {
if ('speechSynthesis' in window) {

    inputTextPanel = document.getElementById("right");
  let inputPassage = inputTextPanel.value;

  speak(inputPassage);

  setTimeout(()=>{ // speak after 1 seconds 
    speak(inputPassage);
  }, 1000);
  inputTextPanel.innerHTML=inputPassage;
}else{
  let output=console.log(' Speech Synthesis Not Supported '); 
  document.getElementById("outext").innerHTML=output;
}
}
function speaktotext(){
        var speech = true;
        window.SpeechRecognition = window.SpeechRecognition
                        || window.webkitSpeechRecognition;
  
        const recognition = new SpeechRecognition();
        recognition.interimResults = true;
        const words = document.querySelector('.words');
        words.appendChild(eng);
  
        recognition.addEventListener('result', e => {
            const transcript = Array.from(e.results)
                .map(result => result[0])
                .map(result => result.transcript)
                .join('')
  
            document.getElementById("eng").innerHTML = transcript;
            console.log(transcript);
        });
          
        if (speech == true) {
            recognition.start();
            recognition.addEventListener('end', recognition.start);
        }
    }
</script>

<footer>
    <div style="text-align: center;" class="lastpara">
        <p style="color:#ECECEC">
            <span style="color:#2363DC; font-weight: 650;">KOGO</span> is optimized for learning, testing and
            training. Examples might
            be<br>simplified to improve reading
            and
            basic understanding. References and<br>examples are constantly reviewed to avoid errors, but we
            cannot
            warrant full<br>correctness of all content. While using this site, you agree to have read
            and<br>accepted our
            terms of use, cookie and privacy policy.
        </p>
        <p style="color:#2363DC; margin:0"><br>© Copyright 2021-2022 by AAC<br>
            All Rights Reserved.
        </p>
    </div>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
 // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>
</body>

</html>