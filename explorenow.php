<?php
require('db.inc.php');
if (isset($_SESSION['NAME']) == false) {
     header('location:login.php');
     die();
}
?>
?>
<html>

<head>
    <title>KOGO - Start translating today!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="KOGO Title Logo.png" type="image/x-icon">
    <link rel="stylesheet" href=" styles.css">
    <link rel="stylesheet" href="explorenowstyles.css?v=<?php echo time(); ?>">
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
                    <?php }else{ ?>
                        <li><button class="login" onClick="location.href='login.php'">LOGIN</button></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>
    <div>
        <p class="title1">Enhance your language</p>
        <p class="title2">Check out our resources to help you excel in Konkani and English! </p>
    </div>
    <div>
        <div class="ddd"></div>
        <p class="dddtext"><span style="color:#2B7FE0";>Our translations not helping enough?</span> 
        Check out our dictionary and discover the heart of all of our derived translations. </p>
        <button onclick="window.open('https://drive.google.com/file/d/12wf6rlyBi3Z3O9nd1wkIfC-6jaZSr8yU/view?usp=sharing')" class="download">Download</button>
        <p class="dddtext2">Reccomending a website that'll put you up to speed on a quick visual Konkani learning. <span style="color:#2363DC; font-weight: 650;">Visit Now!</span></p>
        <div class="ddd2"></div>
        <button onclick="window.open('http://www.languagereef.com/learn_konkani.php?lang=konkani')" class="download2">View Website</button>
    </div>
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