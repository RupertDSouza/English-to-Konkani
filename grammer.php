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