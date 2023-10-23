<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="trynowstyles(1).css">
  
    <title>Speech to Text</title>
</head>
  
<body>
<!--         <a class="rounded-mic" alt="microphone" onclick="speaktotext()">
        <ion-icon name="mic" size="large"></ion-icon>
    </a>
    <form method="post" class="words" contenteditable>
     <textarea placeholder="Enter your text here!" type="text" name="eng" id="eng"
            value="<?php 
                    $eng = addslashes($eng);
                    if(isset($_POST['eng']) == false){
                        $eng = "";}
                    else{
                        $eng = mysqli_real_escape_string($con1,$_POST['eng']);
                    } ?>"><?php $eng=stripslashes("$eng");
                            echo $eng;?></textarea>
    <button class="KOGOb">KOGO</button>
        </form> -->
    <!-- <a name="click" onclick="speaktotext()">Click</a> -->
         <a class="rounded-mic" alt="microphone" onclick="speaktotext()">
        <ion-icon name="mic" size="large"></ion-icon>
    </a>
    <form class="words" method="post" contenteditable>
             <textarea placeholder="Enter your text here!" type="text" name="eng" id="eng"
            value="<?php 
                    $eng = addslashes($eng);
                    if(isset($_POST['eng']) == false){
                        $eng = "";}
                    else{
                        $eng = mysqli_real_escape_string($con1,$_POST['eng']);
                    } ?>"><?php $eng=stripslashes("$eng");
                            echo $eng;?></textarea>
    <button class="KOGOb">KOGO</button>
    </form>
    <script>
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
</body>
  
</html>