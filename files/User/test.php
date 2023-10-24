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
                    <?php if(isset($_SESSION['NAME'])){; ?>
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
        include('./fetch.php');

        function sentence_formation($word,$n,$con1) {

            $words_from_database = array();
            $verbs = array('are','were','decide','decided');
            $partofspeech = ['adverb','noun','pronoun','Interrogative','verb','verbs','3pr_verb'];

            if ($partofspeech[$n] != 'verbs'){
                $sql=fetch('Eng','gramtyp',$partofspeech[$n]);

                $result = $con1->query($sql) or die($con1->error);
                if ($result->num_rows > 0){
                    while($rows=$result->fetch_assoc()){
                        $term = $rows['Eng'];
                        array_push($words_from_database , $term);
                    }
                }
            }else{
                foreach ($verbs as $verb) {
                            array_push($words_from_database , $verb);
                        }
                }
                
            foreach($word as $key => $value) {
                if(in_array($value,$words_from_database)) {
                    unset($word[$key]);
                    if ($n < 3){
                        array_unshift($word,$value);
                    }else{
                        $word[] = $value;
                    }
                    //print_r($word);
                }
            }
            $n++;
            if ($n <= 6){
                return sentence_formation($word,$n,$con1);
            }else{
                return $word;
            }
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

                    $sql=fetch('Eng','Eng',$wrd1);
                    
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

                        $sql=fetch('Eng','Eng',$wrd);
            
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

                        $sql=fetch('Eng','Eng',$word);
            
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
                $final = sentence_formation($kn1,0,$con1);
                //print_r($final);
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

                        $sql=fetch('Eng','Eng',$wrd);
            
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
                        $sql=fetch('Eng','Eng',$word);
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

                        $sql=fetch('Kon','Eng',$word);
                        
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
    if(isset($_SESSION['NAME'])){ ?>
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