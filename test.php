<?php
require('db.inc.php');//php_flag opcache.enable Off;
?>
<html>
    <body>
    <form method="post" class="words" contenteditable>
        <textarea placeholder="Enter your text here!" type="text" name="eng" id="eng">
            <?php 
                if(isset($_POST['eng']) == false){
                    $eng = "";
                }else{
                    $eng = mysqli_real_escape_string($con1,$_POST['eng']);
                }
                $eng=stripslashes("$eng");echo $eng;?>
        </textarea>
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

//.....................................................................................................

                function sentence_formation($word,$n,$con1) {

                    $words_from_database = array();
                    $verbs = array('are','were','decide','decided');
                    $partofspeech = ['adverb','noun','pronoun','Interrogative','verb','verbs','3pr_verb'];

                    if ($partofspeech[$n] != 'verbs'){
                        $sql="SELECT Eng FROM `all_words` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_a` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_b` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_c` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_d` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_e` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_f` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_g` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_h` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_i` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_j` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_k` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_l` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_m` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_n` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_o` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_p` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_q` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_r` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_s` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_t` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_u` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_v` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_w` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_x` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_y` WHERE gramtyp='$partofspeech[$n]'
                          UNION
                          SELECT Eng FROM `table_z` WHERE gramtyp='$partofspeech[$n]'";

                        $result = $con1->query($sql) or die($con1->error);
                        if ($result->num_rows > 0){
                            while($rows=$result->fetch_assoc()){
                                $term = $rows['Eng'];
                                array_push($words_from_database , $term);
                            }
                        }
                    }

                    foreach($word as $key => $value) {
                        if(in_array($value,$words_from_database)) {
                            unset($word[$key]);
                            $word[] = $value;
                        }
                    }
                    $n = $n + 1;
                    if ($n > 6){
                        sentence_formation($word,$n,$con1);
                        }
                    //     return $word;
                    return $word;
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

            $sql="SELECT Eng FROM `all_words` WHERE Eng='$wrd1'";
                    $result = $con1->query($sql) or die($con1->error);
                        if ($result->num_rows > 0){
                                //unset($kn1[1]);
                            $rows=$result->fetch_assoc();
                            array_push($kon , $rows['Eng']);
                            $sentence = strtolower($wrd1);
                            //print($sentence);
                            echo $sentence;
                            $final = ifInDatabase1($sentence,$kon);
                        }else{
                    $words = explode(' ', $wrd1);
                    $count = count($words);

                for ($i=1;$i<=$count;$i++){
                    $kn2 = array();
                        foreach (array_slice($words,$i-1) as $word) {
                        array_push($kn2, $word);
                        if (count($kn2) >= 2){
                            $wrd = implode(' ', $kn2);
            $sql="SELECT Eng FROM `all_words` WHERE Eng='$wrd'";
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
            $sql="SELECT Eng FROM `all_words` WHERE Eng='$word'";
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

                    $final = sentence_formation($kn1,0,$con1);
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
                $final = sentence_formation($kn1,0,$con1);
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
                    <textarea placeholder="Your translated text here!"><?php $print=implode(' ', $new);echo $print; ?></textarea>
                </form>
    </body>
</html>
