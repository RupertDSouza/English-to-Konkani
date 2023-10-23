<?php
require('db.inc.php');
    ?>
<html>

<head>
    <title>KOGO - Start translating today!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="KOGO Title Logo.png" type="image/x-icon">
    <link rel="stylesheet" href=" styles.css">
    <link rel="stylesheet" href="featurestyles.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    
</head>

<body>
    <header>
        <div>
        <img src="icon_removebg.png" alt="logo" class="logo" a onClick="location.href='index.php'">
            <nav>
                <ul>
                    <li><a style="cursor: pointer;" onClick="location.href='index.php'">HOME</a></li>
                    <li><a style="cursor: pointer;" onClick="location.href='features.php'">FEATURES</a></li>
                    <li><a style="cursor: pointer;" onClick="location.href='aboutus.php'">ABOUT US</a></li>
                    <?php 
                    if($_SESSION['logged_in'] == 1){ ?>
                        <li style='color:#2B7FE0;'><?php echo $_SESSION['NAME']; ?></li>
                        <li><button class="login" onClick="location.href='logout.php'">LOGOUT</a></button></li>
                    <?php }else{?>
                        <li><button class="login" onClick="location.href='login.php'">LOGIN</button></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="featurespara">
            <p class="featurespara1">Get the most out of <span style="color:#2363DC; font-weight: 650;">KOGO</span></p>
            <p class="featurespara2">Discover why many people use <span
                    style="color:#2363DC; font-weight: 650;">KOGO</span> for their Konkani to English Translations</p>
        </div>
    </section>
    <section>
        <div class="parent">
            <div class="div1">
                <img src="HQT_Icon-removebg-preview.png" alt="my image" class="HQTIcon" />
                <br><br>
                <p class="hqttext">High<br>
                    Quality<br>
                    Translations</p>
                <button class="foh" href="#myModal1">Find out how</button>
<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>High Quality Translations</h2>
    </div>
    <div class="modal-body">
      <p>Retrieve translated results that’s verified by experts involved with the platform.<br>
        Just as the original text would captivate the reader, so too should the translation. 
        One should forget the translation exists, you ought to be drawn into the text as if it was written in your native tongue. A high-quality translation is a necessity for those who crave text in their native language. 
        It must not form a noticeable gap between the original and the translated; instead, 
        it must be a seamless flow where the translator appears invisible throughout the text.
      </p>
    </div>
  </div>

</div>
            <div class="div2">
                <img src="microphone-svgrepo-com 1.png" alt="my image" class="HQTIcon2" />
                <br><br>
                <p class="hqttext2">Speak more,<br>
                    Type less</p>
                    <button class="foh" href="#myModal2">Find out how</button>
                    <!-- The Modal -->
                    <div id="myModal2" class="modal">
                    
                      <!-- Modal content -->
                      <div class="modal-content">
                        <div class="modal-header">
                          <span class="close">×</span>
                          <h2>Speak More, Type Less</h2>
                        </div>
                        <div class="modal-body">
                          <p>Tap and speak into the microphone to translate short phrases while online.</p>
                        </div>
                      </div>
                    
            </div>
    </section>
    <section> 
        <div class="div3">
                <img src="Group.png" alt="my image" class="HQTIcon2" />
                <br><br>
                <p class="hqttext3">Community<br>
                    Driven</p>
                    <button class="foh" href="#myModal3">Find out how</button>
                    <!-- The Modal -->
                    <div id="myModal3" class="modal">
                    
                      <!-- Modal content -->
                      <div class="modal-content">
                        <div class="modal-header">
                          <span class="close">×</span>
                          <h2>Community Driven</h2>
                        </div>
                        <div class="modal-body">
                          <p>To help people better understand your language, you can submit your feedback and views to our Community page. We pay special attention to queries 
                            asked widely across our platform and with more native speakers who can help translate. <br>People who contribute to the <span style="color:#4BB5E8; font-weight: 650;">KOGO</span> Community can help verify translations.</p>
                        </div>
                      </div>
                    
            </div>
            </div>
            <div class="div4">
                <img src="Group-1.png" alt="my image" class="HQTIcon2" />
                <br><br>
                <p class="hqttext2">Resource<br>
                    Ready</p>
                    <button class="foh" href="#myModal4">Find out how</button>
                    <!-- The Modal -->
                    <div id="myModal4" class="modal">
                    
                      <!-- Modal content -->
                      <div class="modal-content">
                        <div class="modal-header">
                          <span class="close">×</span>
                          <h2>Resource Ready</h2>
                        </div>
                        <div class="modal-body">
                          <p>Education is the great equalizer and a powerful source of opportunity for all. 
                            <br>Explore a collaborative culture of inclusion, 
                            growth, and originality, supported by resources that make a <span style="color:#4BB5E8; font-weight: 650;">KOGO</span> difference in your life.</p>
                        </div>
                      </div>
                    
            </div>
                   
            </div>
    </section>
    <section>
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
    </section>
    <script src="modaltest.js"></script>
</body>

</html>