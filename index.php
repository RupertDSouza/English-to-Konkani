<?php
require('./files/db.inc.php');
if (isset($_SESSION['NAME'])) {
    $_SESSION['logged_in']=1;
}else{
    $_SESSION['logged_in']=0;}
    ?>
<html>

<head>
    <title>KOGO - Start translating today!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/KOGO Title Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
            <div>
            <img src="./images/icon_removebg.png" alt="logo" class="logo" a onClick="location.href='./'">
            <nav>
                <ul>
                    <li><a style="cursor: pointer;" onClick="location.href='./'">HOME</a></li>
                    <li><a style="cursor: pointer;" onClick="location.href='./files/User/features.php'">FEATURES</a></li>
                    <li><a style="cursor: pointer;" onClick="location.href='./files/User/aboutus.php'">ABOUT US</a></li>
                    <?php
                    if($_SESSION['logged_in']==1){ ?>
                        <li style='color:#2B7FE0;'>
                        <?php if($_SESSION['ROLE']==1){ ?>
                            <a href='./files/Admin/'>
                            <?php echo $_SESSION['NAME']; ?>
                            <a>
                            <?php 
                            }else{echo $_SESSION['NAME'];} ?> </li>
                        <li><button class="login" onClick="location.href='./files/Log/out'">LOGOUT</a></button></li>
                    <?php }else{ ?>
                        <li><button class="login" onClick="location.href='./files/Log/in'">LOGIN</button></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>
    <section class="container rectangle block row">
        <div>
            <h2 class="trready">Translation<br>Ready!</h2><br>
            <h5 class="trready2">Start your Konkani-English Translation today!</h5><br>
            <button class="trynow" onClick="location.href='./files/User'">TRY NOW!</button>
        </div>
        <div><img class="illustrate1" src="./images/brazuca.png"></div>
    </section>
    <section class="rectangle2 center" style="margin-bottom: 42px;">
        <div><img src="./images/Brazuca - Airport (1)_auto_x2.jpg" class="illustrate2"></div>
        <div style="margin-right: auto;">
            <h2 style="margin:65 0 9 0" class="enhance">Enhance your<br>Language</h2><br>
            <h5 class="enhance2">Check out our resources to help you<br>excel in Konkani and English!</h5><br>
                    <?php
                    if($_SESSION['logged_in'] == 1){ ?>
                        <button class="explorenow" onClick="location.href='./files/User/explorenow.php'">EXPLORE NOW</button>
                    <?php }else{ ?>
                        <button class="explorenow" onClick="location.href='./files/Log/in'">EXPLORE NOW</button>
                    <?php } ?>
        </div>
    </section>
    <section class="rectangle3 center" style="margin-bottom: 114px;">
        <div id="mleft">
            <h2 class="discuss">Discuss and<br>Evolve</h2><br>
            <h5 class="discuss2">Clear your doubts with our<br>community today!</h5><br>
                    <?php
                    if($_SESSION['logged_in'] == 1){ ?>
                        <button class="forum" onClick="location.href='./files/User/discusskogo.php'">VISIT FORUM</button>
                    <?php }else{ ?>
                        <button class="forum" onClick="location.href='./files/Log/in'">VISIT FORUM</button>
                    <?php } ?>
        </div>
        <div><img src="./images/Brazuca-HappyTogether_auto_x2.jpg" class="illustrate3"></div>
    </section>
    <script type="text/javascript">
     function logout(){
           document.getElementById("logout").innerHTML = true;
        }
    </script>
    <section class="footer">
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
</body>

</html>