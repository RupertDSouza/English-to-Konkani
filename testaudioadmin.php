<?php
require('db.inc.php');
if (isset($_SESSION['NAME']) == false) {
     header('location:login.php');
}
?>
<html>
    <head>
        <title>KOGO Admin</title>
        <link rel="icon" href="KOGO Title Logo.png" type="image/x-icon">
        <link rel="stylesheet" href="admin.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="container">
    <header>
        <hgroup class="logo span-6">
     
        </hgroup>
        <nav class="session-nav span-6">
          <ul>
            <li class="show-menu">
              <a href="">
                <span class="ion-navicon-round"></span>
              </a>
            </li>
            <li>
              <img src="kogoadminlogo.png" class="logo">
                <span class="ion-person"></span>
              </a>
            </li>
            <li>
                <button class="logout" onClick="location.href='logout.php'">LOGOUT</button>
            </li>
          </ul>
        </nav>
    </header>
  </div>


  <nav class="application-nav">
    <div class="container">
      <ul>
        <li class=""><a href="viewall.php"><span class="ion-document-text"></span><span class="text">Suggested Words</span></a>
        </li>
        <li class=""><a href="admin_3.php"><span class="ion-android-share-alt"></span><span class="text">View Words</span></a></li>
        <li class=""><a href="admin2.php"><span class="ion-person-stalker"></span><span class="text">Add Words</span></a></li>
        <li class=""><a href="testaudioadmin.php"><span class="ion-gear-b"></span><span class="text">Test Audio</span></a></li>
      </ul>
    </div>
  </nav>


  <section id="main-content">
    <div class="container">
      <div class="span-12">
        <nav class="breadcrumb-nav">
          <a href="#">Admin</a> &raquo;
          Test Audio
        </nav>
      </div>
<form method="post">
      <div class="span-12">
        <div class="panel">
          <label class="panel-header" for="page-main-content">
            Enter Word
            <span class="hint">Enter the word to test pronunciation</span>
          </label>
          <div class="panel-body">
            <textarea id="page-main-content" name="page-main-content"></textarea>
          </div>
        </div>
      </div>
      <button class="voicetest1" onclick="myFunction()">Test Audio</button>
    </form>
    </div>
  </section>
  <p id="outext"></p>
  <script type="text/javascript">

function speak(text) {
  let speakData = new SpeechSynthesisUtterance(); // create a SpeechSynthesisUtterance to configure the how text to be spoken 
    speakData.text = text;
    speakData.lang = 'en';
  speechSynthesis.speak(speakData);   // pass the SpeechSynthesisUtterance to speechSynthesis.speak to start speaking 
}

function myFunction() {
if ('speechSynthesis' in window) {
    inputTextPanel = document.getElementById("page-main-content");
  let inputPassage = inputTextPanel.value;
  speak(inputPassage);
  setTimeout(()=>{  // speak after 1 seconds 
    speak(inputPassage);
  }, 1000);
}else{
  let output=console.log(' Speech Synthesis Not Supported '); 
  document.getElementById("outext").innerHTML=output;
}
}
</script>
</body>
</html>