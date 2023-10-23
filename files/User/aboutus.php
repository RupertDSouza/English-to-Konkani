<?php
require('../db.inc.php');
    ?>
<html>

<head>
    <title>KOGO - Start translating today!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="KOGO Title Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/aboutusstyles.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div>
            <img src="../../images/icon_removebg.png" alt="logo" class="logo" a onClick="location.href='./'">
            <nav>
                <ul>
                    <li><a onClick="location.href='../../'">HOME</a></li>
                    <li><a onClick="location.href='./features.php'">FEATURES</a></li>
                    <li><a onClick="location.href='./aboutus.php'">ABOUT US</a></li>
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
                    <?php }else{ ?>
                        <li><button class="login" onClick="location.href='../Log/in'">LOGIN</button></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="featurespara">
            <p class="featurespara1">Meet the team behind <span style="color:#2363DC; font-weight: 650;">KOGO</span></p>
            <p class="featurespara2">Strong, curious and an ambitious team redefining success on their own terms</p>
        </div>
        </section>
        <section><center>
            <div class="parent">
                <div class="div1">
                    <img src="../../images/anishrupertpfp.png" alt="Anish Rupert D'souza" class="Anishpfp1" />
                    <p class="nametitle">Anish Rupert<br> D'souza</p>
                    <p class="aboutuspara"><span style="color:#2363DC; font-weight: 650; font-size: 36px;">"</span> Passion is a huge prerequisite to<br> winning. It makes you willing to jump<br> through hoops, go through all
                        the ups<br> and downs and everything in between <span style="color:#2363DC; font-weight: 650; font-size: 36px;">"</span></p>
                </div>
                <div class="div2">
                    <img src="../../images/anishdsouzapfp.png" alt="Anish D'souza" class="Anishpfp1" />
                    <p class="nametitle">Anish<br> D'souza</p>
                    <p class="aboutuspara"><span style="color:#2363DC; font-weight: 650; font-size: 36px;">"</span> Passion is a huge prerequisite to<br> winning. It makes you willing to jump<br> through hoops, go through all
                        the ups<br> and downs and everything in between <span style="color:#2363DC; font-weight: 650; font-size: 36px;">"</span></p>
                </div>
                <div class="div3">
                    <img src="../../images/christypfp.png" alt="Christy James Vas" class="Anishpfp1" />
                    <p class="nametitle">Christy James<br> Vas</p>
                    <p class="aboutuspara"><span style="color:#2363DC; font-weight: 650; font-size: 36px;">"</span> Passion is a huge prerequisite to<br> winning. It makes you willing to jump<br> through hoops, go through all
                        the ups<br> and downs and everything in between <span style="color:#2363DC; font-weight: 650; font-size: 36px;">"</span></p>
                </div>
            </center>
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
    </body></html>